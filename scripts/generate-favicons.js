import sharp from 'sharp';
import { fileURLToPath } from 'url';
import { dirname, join } from 'path';
import { existsSync, mkdirSync } from 'fs';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

const sizes = [16, 32, 64, 128, 256, 512];
const sourceFile = join(__dirname, '../public/favicon.svg');

async function generateFavicons() {
    try {
        // Asegurarse de que el directorio public existe
        const publicDir = join(__dirname, '../public');
        if (!existsSync(publicDir)) {
            mkdirSync(publicDir, { recursive: true });
        }

        // Generar favicon.png (32x32)
        await sharp(sourceFile)
            .resize(32, 32)
            .png()
            .toFile(join(publicDir, 'favicon.png'));

        // Generar apple-touch-icon.png (180x180)
        await sharp(sourceFile)
            .resize(180, 180)
            .png()
            .toFile(join(publicDir, 'apple-touch-icon.png'));

        // Generar favicon-{size}.png para diferentes tamaños
        for (const size of sizes) {
            await sharp(sourceFile)
                .resize(size, size)
                .png()
                .toFile(join(publicDir, `favicon-${size}.png`));
        }

        console.log('Favicons generados exitosamente');
    } catch (error) {
        console.error('Error al generar los favicons:', error);
    }
}

generateFavicons(); 