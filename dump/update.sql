SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER SCHEMA `chelaton`  DEFAULT CHARACTER SET utf8  DEFAULT COLLATE utf8_general_ci ;

ALTER TABLE `chelaton`.`orden` 
DROP FOREIGN KEY `fk_orden_usuario_direccion1`;

ALTER TABLE `chelaton`.`usuario` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `chelaton`.`orden` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ,
CHANGE COLUMN `usuario_direccion_id` `usuario_direccion_id` INT(11) ZEROFILL NULL DEFAULT NULL ;

ALTER TABLE `chelaton`.`usuario_direccion` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `chelaton`.`orden_detalle` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

ALTER TABLE `chelaton`.`producto` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ,
ADD COLUMN `cantidad_disponible` INT(10) UNSIGNED NULL DEFAULT NULL AFTER `estatus`;

ALTER TABLE `chelaton`.`orden_bitacora` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ;

CREATE TABLE IF NOT EXISTS `chelaton`.`transaccion` (
  `transaccion_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `respuesta_api` VARCHAR(45) NULL DEFAULT NULL,
  `monto` VARCHAR(45) NULL DEFAULT NULL,
  `estatus` VARCHAR(45) NULL DEFAULT NULL,
  `orden_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`transaccion_id`),
  INDEX `fk_transaccion_orden1_idx` (`orden_id` ASC),
  CONSTRAINT `fk_transaccion_orden1`
    FOREIGN KEY (`orden_id`)
    REFERENCES `chelaton`.`orden` (`orden_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `chelaton`.`cupon` (
  `cupon_id` INT(11) NOT NULL,
  `porcentaje_descuento` VARCHAR(45) NULL DEFAULT NULL,
  `expira_en` VARCHAR(45) NULL DEFAULT NULL,
  `estatus` VARCHAR(45) NULL DEFAULT NULL,
  `usuario_id` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`cupon_id`),
  INDEX `fk_cupon_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_cupon_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `chelaton`.`usuario` (`usuario_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

ALTER TABLE `chelaton`.`orden` 
ADD CONSTRAINT `fk_orden_usuario_direccion1`
  FOREIGN KEY (`usuario_direccion_id`)
  REFERENCES `chelaton`.`usuario_direccion` (`usuario_direccion_id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
