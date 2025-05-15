<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InitialSchemaFromExisting extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up(): void
    {
        // Create subscribers table
        $this->execute("
            CREATE TABLE IF NOT EXISTS `subscribers` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `email` VARCHAR(255) NOT NULL UNIQUE,
              `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");
        
        // Create leads table
        $this->execute("
            CREATE TABLE IF NOT EXISTS `leads` (
              `id` INT AUTO_INCREMENT PRIMARY KEY,
              `email` VARCHAR(255) NOT NULL,
              `name` VARCHAR(255) NULL,
              `source` VARCHAR(100) NULL,
              `meta` TEXT NULL,
              `subscribed_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
              `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
              UNIQUE KEY `unique_email` (`email`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ");
    }
    
    public function down(): void
    {
        $this->execute("DROP TABLE IF EXISTS `leads`;");
        $this->execute("DROP TABLE IF EXISTS `subscribers`;");
    }
}
