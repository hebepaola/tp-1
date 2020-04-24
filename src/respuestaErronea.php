<?php

/**
 * Esta función es la encargada de cortar la ejecución
 * cuando hay un error de validación. Se encarga de retornar
 * una respuesta de tipo JSON al cliente.
 */
function respuestaErronea(string $err)
{
  // 1. Configuro la cabecera de la respuesta como json
  header('Content-Type: application/json');
  // 2. Especifico el código HTTP 400, que se usa,
  // entre otras cosas, para decir que falló una validación de datos
  http_response_code(400);

  // 3. Seteo la estructura JSON { error: 'mensaje' }
  // como cuerpo de la respuesta
  echo json_encode(['error' => $err]);

  // 4. Corto la ejecución de PHP. exit 0 equivale a un final normal
  // (no erróneo). Por más que fallara la validación, eso es una situación
  // normal de la aplicación.
  exit();
}
