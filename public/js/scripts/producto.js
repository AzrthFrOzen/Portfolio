var constraints = {
    Nombre: {
        presence: true,
        length: {
            minimum: 5,
            maximum: 20,
            message: '^Nombre debe poseer entre 5 y 10 caracteres'
        }
    },
    Descripcion: {
        presence: true
    },
    PrecioCosto: {
        presence: { message: '^Precio de costo no puede estar vacío.' },
        numericality: {
            greaterThanOrEqualTo: 0,
            noGreaterThanOrEqualTo: '^ Precio de costo no puede ser menor que cero'
        }
    },
    PrecioVenta: {
        presence: { message: '^Precio de venta no puede estar vacío.' },
        numericality: {
            greaterThanOrEqualTo: 0,
            noGreaterThanOrEqualTo: '^ Precio de venta no puede ser menor que cero'
        }
    },
    Stock: {
        presence: { message: '^Stock no puede estar vacío.' },
        numericality: {
            greaterThanOrEqualTo: 0,
            noGreaterThanOrEqualTo: '^ Stock no puede ser menor que cero'
        }
    },
    StockMinimo: {
        presence: { message: '^Stock mínimo de costo no puede estar vacío.' },
        numericality: {
            greaterThanOrEqualTo: 0,
            noGreaterThanOrEqualTo: '^ El stock mínimo no puede ser menor que cero'
        }
    }
}