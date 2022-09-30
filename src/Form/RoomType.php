<?php

namespace App\Form;

use App\Entity\Building;
use App\Entity\Group;
use App\Entity\Room;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('number', NumberType::class)
            ->add('building', EntityType::class, [
                'class' => Building::class,
                'choice_label' => function ($building) {
                    return $building->getName() . " (" . $building->getAddress() . ")";
                }
            ])
            ->add('manager', EntityType::class, [
                'class' => User::class,
                'required' => false,
                'placeholder' => 'Žádný',
                'choice_label' => function ($user) {
                    return $user->getFirstName() . " " . $user->getLastName() . " (" . $user->getUsername() . ")";
                }
            ])
            ->add('group', EntityType::class, [
                'class' => Group::class,
                'required' => false,
                'placeholder' => 'Žádný',
                'choice_label' => function ($group) {
                    return $group->getName();
                }
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Room::class,
        ]);
    }
}