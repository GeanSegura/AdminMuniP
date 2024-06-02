DELIMITER //

CREATE PROCEDURE validar_usuario(
    IN p_vc_codigo VARCHAR(128),
    IN p_vc_contrasena VARCHAR(128),
    OUT p_resultado INT
)
BEGIN
    DECLARE user_count INT;

    -- Verificar si el usuario existe
    SELECT COUNT(*) INTO user_count
    FROM ggen_ta_usuarios
    WHERE vc_codigo = p_vc_codigo 
    AND vc_contrasena = p_vc_contrasena
    AND vc_estado_registro = 'A';

    -- Asignar resultado
    IF user_count = 1 THEN
        SET p_resultado = 1; -- Usuario válido
    ELSE
        SET p_resultado = 0; -- Usuario inválido
    END IF;
END //

DELIMITER ;
