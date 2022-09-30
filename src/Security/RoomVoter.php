<?php

namespace App\Security;

use App\Entity\Request;
use App\Entity\Room;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class RoomVoter extends Voter
{
    const RESERVATION = 'reservation';

    protected function supports(string $attribute, $subject): bool
    {
        if ($attribute != self::RESERVATION) {
            return false;
        }

        if (!$subject instanceof Room) {
            return false;
        }

        return true;
    }

    protected function voteOnAttribute(string $attribute, $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            return false;
        }

        /** @var Room $room */
        $room = $subject;

        if(in_array('ROLE_ADMIN', $user->getRoles()) || ($room->getManager()!== null && $room->getManager()->getId() === $user->getId())) {
            return true;
        }

        return $this->isMemberRoom($room, $user) || $this->isMemberGroupRoom($room, $user);
    }

    private function isMemberRoom(Room $room, User $user): bool
    {
        foreach ($user->getRequests() as $request) {
            if($request->getRoom()->getId() === $room->getId()) {
                return $request->getStatus() === Request::STATUS_APPROVED;
            }
        }

        return false;
    }

    private function isMemberGroupRoom(Room $room, User $user): bool {
        if(($group = $room->getGroup()) === null) {
            return false;
        }

        foreach ($user->getGroups() as $userGroup) {
            if($userGroup->getId() === $group->getId()) {
                return true;
            }
        }

        return false;
    }
}