CREATE DATABASE `student_registration`;

CREATE TABLE `student_registration`.`prospective_student` (
    `id` INT NOT NULL AUTO_INCREMENT ,  
    `name` VARCHAR(64) NOT NULL ,  
    `address` VARCHAR(255) NOT NULL ,  
    `gender` VARCHAR(16) NOT NULL ,  
    `religion` VARCHAR(16) NOT NULL ,  
    `school_origin` VARCHAR(64) NOT NULL ,    
    PRIMARY KEY  (`id`)
)