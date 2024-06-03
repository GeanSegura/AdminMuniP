
DELIMITER //

CREATE PROCEDURE ObtenerUsuarios()
BEGIN
    SELECT vc_nombre,vc_contrasena,vc_estado_registro 
    FROM ggen_ta_usuarios ;
END //

DELIMITER ;
