import bcrypt

# Contraseña en texto plano que deseas encriptar
plain_password = "Overall2024*".encode('utf-8')

# Genera una sal (salt) para el hash
salt = bcrypt.gensalt()

# Crea el hash de la contraseña utilizando la sal generada
hashed_password = bcrypt.hashpw(plain_password, salt)

# Muestra el hash generado
print("Hash generado:", hashed_password)

'$2y$10$F2Q3VFAOmB7LadKvX3p96OLakWmE4FrQTOJ0wDe5QPXL/0gk2FkXe'
