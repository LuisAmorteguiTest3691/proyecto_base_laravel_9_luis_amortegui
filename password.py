import bcrypt

# Hash bcrypt proporcionado 
hashed_password = b"$2b$12$Llex3QXd7sNiMBi1re4Te.CJZlR7nCN8e0jM1N18NWtvrBfvlhdaq"

# Reemplaza "mi_contraseña" con la contraseña que deseas verificar
# plain_password = "Overall2024*".encode('utf-8')
plain_password = "Overall2024*".encode('utf-8')

# Cambiar el prefijo $2y$ a $2b$ si es necesario, ya que bcrypt lo requiere en algunos casos
if hashed_password.startswith(b"$2y$"):
    hashed_password = b"$2b$" + hashed_password[4:]

# Verificar la contraseña
if bcrypt.checkpw(plain_password, hashed_password):
    print("La contraseña es correcta")
else:
    print("La contraseña es incorrecta")

# cedula johan 1233506968

