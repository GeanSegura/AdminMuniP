DELIMITER //
CREATE PROCEDURE EliminarUsuario(IN nombre VARCHAR(180))
BEGIN
    DELETE FROM ggen_ta_usuarios WHERE vc_nombre = nombre;
END //
DELIMITER ;