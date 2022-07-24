var constraints = {
    Nombres: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 20,
            message: '^Nombre debe poseer entre 5 y 20 caracteres'
        }
    },
    Apellidos: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 20,
            message: '^Apellidos debe poseer entre 5 y 20 caracteres'
        }
    },
    Direccion: {
        presence: {message: '^Debes escribir tu dirección'}
    },
    Ubicacion: {
        presence: { message: '^Debes indicar tu ubicación' }
    },
    Telf: {
        presence: { message: '^Teléfono no puede estar vacío, no debe ser mayor a 9 números.' },
        numericality: {
            greaterThanOrEqualTo: 0,
            noGreaterThanOrEqualTo: 9
        }
    },
    DNI: {
        presence: { message: '^Debes colocar tu DNI.' },
        numericality: {
            greaterThanOrEqualTo: 0,
            noGreaterThanOrEqualTo: 8
        }
    },
}