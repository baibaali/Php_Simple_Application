<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220102130008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE `building` (
                                `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                                `name` VARCHAR(255) NOT NULL,
                                `address` VARCHAR(255) NOT NULL
                        )');

        $this->addSql('CREATE TABLE `user` (
                                `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                                `username` VARCHAR(180) NOT NULL UNIQUE,
                                `password` VARCHAR(255) NOT NULL,
                                `roles` CLOB NOT NULL --(DC2Type:json)
                                , `first_name` VARCHAR(32) NOT NULL,
                                `last_name` VARCHAR(32) NOT NULL
                        )');

        $this->addSql('CREATE TABLE `group` (
                                `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                                `name` VARCHAR(255) NOT NULL,
                                `manager_id` INTEGER DEFAULT NULL REFERENCES `user` (`id`)
                        )');

        $this->addSql('CREATE TABLE `group_user` (
                                `group_id` INTEGER NOT NULL REFERENCES `group` (`id`),
                                `user_id` INTEGER NOT NULL REFERENCES `user` (`id`),
                                PRIMARY KEY(`group_id`, `user_id`)
                        )');

        $this->addSql('CREATE TABLE `room` (
                                `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                                `name` VARCHAR(255) NOT NULL,
                                `number` VARCHAR(255) NOT NULL,
                                `building_id` INTEGER NOT NULL REFERENCES `building` (`id`),
                                `manager_id` INTEGER DEFAULT NULL REFERENCES `user` (`id`),
                                `group_id` INTEGER DEFAULT NULL REFERENCES `group` (`id`)
                        )');

        $this->addSql('CREATE TABLE `request` (
                                `user_id` INTEGER NOT NULL REFERENCES `user` (`id`),
                                `room_id` INTEGER NOT NULL REFERENCES `room` (`id`),
                                `status` VARCHAR(8) NOT NULL,
                                PRIMARY KEY(`user_id`, `room_id`)
                        )');

        $this->addSql('CREATE TABLE `reservation` (
                                `id` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
                                `user_id` INTEGER NOT NULL REFERENCES `user` (`id`),
                                `room_id` INTEGER NOT NULL REFERENCES `room` (`id`),
                                `from` DATETIME NOT NULL,
                                `to` DATETIME NOT NULL,
                                `status` VARCHAR(8) NOT NULL
                        )');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE `building`');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE `group`');
        $this->addSql('DROP TABLE `group_user`');
        $this->addSql('DROP TABLE `room`');
        $this->addSql('DROP TABLE `request`');
        $this->addSql('DROP TABLE `reservation`');
    }
}
