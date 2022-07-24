var constraints = {
    Usuario: {
        presence: true,
        length: {
            minimum: 2,
            maximum: 20,
            message: '^Nombre debe poseer entre 2 y 10 caracteres'
        }
    },
    Clave: {
        presence: {message: '^La contraseña es obligatoria'}
    },
    Correo: {
        presence: true,
    }
}