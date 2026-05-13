function numeroALetras(numero) {

    numero = parseInt(numero);

    const unidades = [
        '',
        'Un',
        'Dos',
        'Tres',
        'Cuatro',
        'Cinco',
        'Seis',
        'Siete',
        'Ocho',
        'Nueve'
    ];

    const especiales = [
        'Diez',
        'Once',
        'Doce',
        'Trece',
        'Catorce',
        'Quince',
        'Dieciséis',
        'Diecisiete',
        'Dieciocho',
        'Diecinueve'
    ];

    const decenas = [
        '',
        '',
        'Veinte',
        'Treinta',
        'Cuarenta',
        'Cincuenta',
        'Sesenta',
        'Setenta',
        'Ochenta',
        'Noventa'
    ];

    const centenas = [
        '',
        'Ciento',
        'Doscientos',
        'Trescientos',
        'Cuatrocientos',
        'Quinientos',
        'Seiscientos',
        'Setecientos',
        'Ochocientos',
        'Novecientos'
    ];

    if (numero === 0) return 'Cero';

    if (numero === 100) return 'Cien';

    function convertirMenorMil(n) {

        let texto = '';

        if (n === 100) return 'Cien';

        if (n > 100) {
            texto += centenas[Math.floor(n / 100)] + ' ';
            n %= 100;
        }

        if (n >= 10 && n < 20) {
            texto += especiales[n - 10];
            return texto.trim();
        }

        if (n >= 20) {

            if (n >= 21 && n <= 29) {

                const veinti = [
                    '',
                    'Veintiuno',
                    'Veintidós',
                    'Veintitrés',
                    'Veinticuatro',
                    'Veinticinco',
                    'Veintiséis',
                    'Veintisiete',
                    'Veintiocho',
                    'Veintinueve'
                ];

                texto += veinti[n - 20];

            } else {

                texto += decenas[Math.floor(n / 10)];

                if (n % 10 > 0) {
                    texto += ' y ' + unidades[n % 10];
                }

            }

        } else if (n > 0) {

            texto += unidades[n];

        }

        return texto.trim();

    }

    function convertir(n) {

        if (n < 1000) {
            return convertirMenorMil(n);
        }

        // MILES
        if (n < 1000000) {

            let miles = Math.floor(n / 1000);
            let resto = n % 1000;

            let texto = '';

            if (miles === 1) {
                texto = 'Mil';
            } else {
                texto = convertirMenorMil(miles) + ' Mil';
            }

            if (resto > 0) {
                texto += ' ' + convertirMenorMil(resto);
            }

            return texto.trim();

        }

        // MILLONES
        if (n < 1000000000000) {

            let millones = Math.floor(n / 1000000);
            let resto = n % 1000000;

            let texto = '';

            if (millones === 1) {
                texto = 'Un Millón';
            } else {
                texto = convertir(millones) + ' Millones';
            }

            if (resto > 0) {
                texto += ' ' + convertir(resto);
            }

            return texto.trim();

        }

        // BILLONES
        if (n < 1000000000000000) {

            let billones = Math.floor(n / 1000000000000);
            let resto = n % 1000000000000;

            let texto = '';

            if (billones === 1) {
                texto = 'Un Billón';
            } else {
                texto = convertir(billones) + ' Billones';
            }

            if (resto > 0) {
                texto += ' ' + convertir(resto);
            }

            return texto.trim();

        }

        return 'Número demasiado grande';

    }

    return convertir(numero);

}