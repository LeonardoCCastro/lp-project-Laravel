import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
      ],
      refresh: true,
    }),
  ],
  build: {
    outDir: 'public/build', // Define o diretório de saída
    rollupOptions: {
      output: {
        entryFileNames: 'js/app.js', // Define o nome do arquivo JavaScript como app.js
        chunkFileNames: 'js/[name].js', // Define o nome dos arquivos de chunk gerados (se houver)
        assetFileNames: (assetInfo) => {
          if (assetInfo.name === 'app.css') {
            return 'css/app.css'; // Define o nome do arquivo CSS como app.css
          }
          return 'css/[name][extname]'; // Para outros ativos como imagens, fontes, etc.
        },
      },
    },
  },
});