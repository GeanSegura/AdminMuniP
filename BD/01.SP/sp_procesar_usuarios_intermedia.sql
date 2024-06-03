DELIMITER //

CREATE PROCEDURE sp_procesar_usuarios_intermedia(
    IN p_vc_codigo_usuario VARCHAR(128),
	IN p_vc_nombre_usuario VARCHAR(128),
    IN p_vc_contrasena_usuario VARCHAR(128),
    IN p_ch_estado_usuario CHAR(1),
    IN p_vc_id_usuario VARCHAR(128) 
   
)
BEGIN
	INSERT INTO ggen_ta_usuarios
	(
	vc_codigo
	,vc_nombre
	,vc_contrasena
	,vc_estado_registro
	)
	VALUES (
	p_vc_codigo_usuario
	,p_vc_nombre_usuario
	,p_vc_contrasena_usuario
	,p_ch_estado_usuario
	);
END //

DELIMITER ;
