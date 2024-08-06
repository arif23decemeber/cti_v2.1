<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        // Dark Mode Script
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
        
    </script>
    <script src="tailwind.js"></script>
    <link href="flowbite.css" rel="stylesheet" />
    <style>
        .icon-rotate {
            transition: transform 0.3s ease;
        }
    
        .icon-rotate.rotate {
            transform: rotate(180deg);
        }

        .bg-muda {
            background: linear-gradient(90deg, rgb(76, 69, 215) 0%, rgb(1, 178, 160) 0%, rgb(236, 236, 236) 100%);
        }
        
        .bg-biru {
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,117,207,1) 0%, rgba(104,229,255,1) 100%);
        }
        .bg-hijau {
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(2,115,103,1) 0%, rgba(104,255,160,1) 100%);
        }
        .bg-pink {
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(167,0,154,1) 0%, rgba(255,136,209,1) 100%);
        }
        .bg-gelap {
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(0,89,167,1) 0%, rgba(136,183,255,1) 100%);
        }
        /* Tambahan styling untuk efek shadow */
        .fixed-media a {
            transition: all 0.3s ease;
        }

        .fixed-media a:hover {
            transform: translateY(-5px);
        }
    

    </style>
</head>