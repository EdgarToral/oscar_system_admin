/*
PEDIDO

ENCUESTA
*/


UNIDADES{
    uni_id int,
    usu_id int,
    uni_descripcion varchar(30)
    
}
RUTAS  {
    rut_id int,
    rut_descripcion varchar(30)
}
PAGOFORMA{
    pag_id int,
    pag_descripcion varchar(30)
}

PRODUCTOS{
    pro_id int,
    pro_descripcion varchar(30),
    pro_precio money
}

ZONAS{
    zon_id int,
    zon_descripcion varchar(30),
    zon_codigo int
}
ROLES{
    rol_id int,
    rol_descripcion varchar(30)
}
USUARIO{
    usu_id int,
    rol_id int,
    zon_id int,
    usu_usuario varchar(30),
    usu_nombre varchar(50),
    usu_ap_paterno varchar(30),
    usu_ap_materno varchar(30),
    usu_telefono varchar(10),
    usu_sexo char(1),
    usu_contrasenia varchar(30), 
    usu_estatus char(1),
    usu_fecha_registro datetime
}

DIRECCIONES{
    dir_id int,
    cli_id int,
    dir_direccion varchar(130) ,
	dir_cp varchar(10),
	dir_colonia varchar(130) ,
	dir_municipio varchar(130) ,
	dir_localidad varchar(130) ,
	dir_estado varchar(130),
	dir_noexterior varchar(10) ,
	dir_nointerior varchar(10),
	dir_pais varchar(130) ,
	dir_fecha_registro datetime
}

SERVICIO{
    ser_id int,
    ser_descripcion varchar(50),
    ser_tiempo int
}
SOLUCIONES{
    sol_id int,
    ser_id int,
    sol_descripcion varchar(100)
}
PEDIDOS_ORIGEN{
    ori_id int,
    ori_descripcion varchar(30)
}
PEDIDOS_ENCABEZADO
{
    ped_id int,
    dir_id int,
    pag_id int,
    rut_id int,
    uni_id int,
    ori_id int,
    ped_estatus char(1),
    ped_total money,
    ped_fecha_registro datetime
    
}
PEDIDOS_DETALLE{
    det_id int,
    det_cantidad int,
    ped_id int,
    ser_id int,
    pro_id int,
    det_tipo char(1),
    det_estatus char(1),
    det_fecha_registro datetime
}
PEDIDOS_COMENTARIOS{
    com_id int,
    ped_id int,
    com_comentarios varchar(max),
    com_fecha_registro datetime
}
