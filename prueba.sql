
CREATE TABLE `tabla_prueba` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`texto_prueba` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcado de datos para la tabla `tabla_prueba`

INSERT INTO `tabla_prueba` (`id`, `texto_prueba`) VALUES
(1, 'Este es un texto de prueba'),
(2, 'Este es otro texto de prueba');

COMMIT;
