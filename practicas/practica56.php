<?php
// Obtener método HTTP
$metodo = $_SERVER['REQUEST_METHOD'];

// Inicializar variables
$usuario = "";
$contrasena = "";
$error = "";
$success = "";
$contador = 0;

// Procesar formulario si es POST
if ($metodo === 'POST') {
    
    // Validar que los campos existen y no están vacíos
    if (isset($_POST['txtUsuario']) && !empty($_POST['txtUsuario']) && 
        isset($_POST['txtContrasena']) && !empty($_POST['txtContrasena'])) {
        
        // Sanitizar y obtener valores
        $usuario = filter_var($_POST['txtUsuario'], FILTER_SANITIZE_STRING);
        $contrasena = $_POST['txtContrasena']; // Las contraseñas no se sanitizan con FILTER_SANITIZE_STRING
        
        // Validar longitud mínima del usuario
        if (strlen($usuario) < 3) {
            $error = "❌ El nombre de usuario debe tener al menos 3 caracteres";
        } 
        // Validar longitud mínima de la contraseña
        elseif (strlen($contrasena) < 6) {
            $error = "❌ La contraseña debe tener al menos 6 caracteres";
        } 
        // Aquí iría la lógica de autenticación real
        // (comparar con base de datos, verificar hash, etc.)
        else {
            // ⚠️ EJEMPLO DE VALIDACIÓN (en producción usar base de datos)
            $usuario_valido = "admin";
            $contrasena_valida = "123456";
            
            if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
                $success = "✅ ¡Inicio de sesión exitoso! Bienvenido, " . htmlspecialchars($usuario);
                // En producción: header('Location: dashboard.php'); exit;
            } else {
                $error = "❌ Usuario o contraseña incorrectos";
            }
        }
        
    } else {
        $error = "❌ Por favor completa todos los campos";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANEL DE INGRESO</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }
        
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .formulario label {
            display: block;
            margin: 15px 0 5px;
            color: #555;
            font-weight: 600;
            font-size: 14px;
        }
        
        .formulario input[type="text"],
        .formulario input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
            margin-bottom: 15px;
        }
        
        .formulario input[type="text"]:focus,
        .formulario input[type="password"]:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2);
        }
        
        .formulario input[type="submit"] {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            margin-top: 10px;
        }
        
        .formulario input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }
        
        .formulario input[type="submit"]:active {
            transform: translateY(0);
        }
        
        .message {
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 500;
        }
        
        .error {
            background: #ffebee;
            color: #c62828;
            border: 1px solid #ffcdd2;
        }
        
        .success {
            background: #e8f5e9;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>🔐 PANEL DE INGRESO</h2>
        
        <!-- Mostrar mensaje de error -->
        <?php if ($error): ?>
            <div class="message error">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        
        <!-- Mostrar mensaje de éxito -->
        <?php if ($success): ?>
            <div class="message success">
                <?php echo htmlspecialchars($success); ?>
            </div>
        <?php endif; ?>
        
        <div class="formulario">
            <form action="practica56.php" method="post">
                <div class="form-group">
                    <label for="txtUsuario">👤 Usuario:</label>
                    <input 
                        type="text" 
                        name="txtUsuario" 
                        id="txtUsuario" 
                        value="<?php echo htmlspecialchars($usuario); ?>" 
                        required 
                        autofocus
                        placeholder="Ingresa tu usuario"
                    >
                </div>
                
                <div class="form-group">
                    <label for="txtContrasena">🔒 Contraseña:</label>
                    <input 
                        type="password" 
                        name="txtContrasena" 
                        id="txtContrasena" 
                        required
                        placeholder="Ingresa tu contraseña"
                    >
                </div>
                
                <input type="submit" value="Ingresar">
            </form>
        </div>
    </div>
</body>
</html>