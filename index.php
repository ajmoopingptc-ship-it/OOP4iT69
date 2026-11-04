<?php
// ข้อมูลจังหวัดภูเก็ต
$province_info = [
    'name_th' => 'ภูเก็ต',
    'name_en' => 'Phuket',
    'motto' => 'ไข่มุกอันดามัน เมืองท่องเที่ยวเกาะระดับโลก หาดทรายขาว น้ำใส วัฒนธรรมหลากหลาย',
    'description' => 'จังหวัดภูเก็ต เป็นเกาะที่ใหญ่ที่สุดในประเทศไทย ตั้งอยู่ในทะเลอันดามัน มีชื่อเสียงระดับโลกในด้านสถานที่ท่องเที่ยวทางธรรมชาติ ย่านเมืองเก่าสถาปัตยกรรมชิโน-ยูโรเปียน และอาหารพื้นเมืองที่เป็นเอกลักษณ์',
    'highlights' => [
        [
            'title' => 'ย่านเมืองเก่าภูเก็ต',
            'desc' => 'ชมอาคารโบราณสไตล์ชิโน-ยูโรเปียน ถ่ายรูปกับสตรีทอาร์ต และเดินเที่ยวถนนคนเดิน',
            'icon' => '🏛️'
        ],
        [
            'title' => 'แหลมพรหมเทพ',
            'desc' => 'จุดชมพระอาทิตย์ตกดินที่สวยงามและมีชื่อเสียงที่สุดแห่งหนึ่งในประเทศไทย',
            'icon' => '🌅'
        ],
        [
            'title' => 'หาดป่าตอง',
            'desc' => 'ชายหาดยอดนิยม คึกคัก มีกิจกรรมทางน้ำและสถานบันเทิงยามค่ำคืนครบครัน',
            'icon' => '🏖️'
        ],
        [
            'title' => 'วัดฉลอง (วัดไชยธาราราม)',
            'desc' => 'วัดคู่บ้านคู่เมืองภูเก็ต นมัสการหลวงพ่อแช่มเพื่อความเป็นสิริมงคล',
            'icon' => '🛕'
        ]
    ],
    'famous_foods' => [
        'หมูฮ้อง (หมูต้มซีอิ๊วสไตล์ภูเก็ต)',
        'หมี่ฮกเกี้ยน (ผัดหมี่เส้นใหญ่)',
        'โอวต้าว (หอยทอดแป้งนุ่มสไตล์ภูเก็ต)',
        'โลบะ (เครื่องในหมูพะโล้ทอด)',
        'โอเอ๋ว (ขนมหวานน้ำแข็งใส)'
    ]
];
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลจังหวัด<?= $province_info['name_th'] ?> (<?= $province_info['name_en'] ?>)</title>
    <!-- Bootstrap 5 CSS -->
    <link href="[suspicious link removed]" rel="stylesheet">
    <!-- Google Fonts (Sarabun) -->
    <link href="[suspicious link removed]" rel="stylesheet">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('[suspicious link removed]') center/cover no-repeat;
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

    <!-- Header / Hero Section -->
    <header class="hero-section">
        <div class="container">
            <h1 class="display-3 fw-bold">จังหวัด<?= $province_info['name_th'] ?></h1>
            <p class="fs-4 text-warning"><?= $province_info['name_en'] ?></p>
            <p class="lead mt-3">"<?= $province_info['motto'] ?>"</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <!-- ข้อมูลทั่วไป -->
        <section class="mb-5">
            <div class="p-4 bg-white rounded-3 shadow-sm">
                <h2 class="text-primary mb-3">📌 เกี่ยวกับจังหวัดภูเก็ต</h2>
                <p class="fs-5 text-secondary mb-0"><?= $province_info['description'] ?></p>
            </div>
        </section>

        <!-- สถานที่ท่องเที่ยวยอดนิยม -->
        <section class="mb-5">
            <h2 class="text-primary mb-4">📍 สถานที่ท่องเที่ยวยอดนิยม</h2>
            <div class="row g-4">
                <?php foreach ($province_info['highlights'] as $place): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 p-3">
                            <div class="card-body">
                                <div class="fs-1 mb-2"><?= $place['icon'] ?></div>
                                <h5 class="card-title fw-bold"><?= $place['title'] ?></h5>
                                <p class="card-text text-muted"><?= $place['desc'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- อาหารขึ้นชื่อ -->
        <section class="mb-5">
            <div class="p-4 bg-white rounded-3 shadow-sm">
                <h2 class="text-primary mb-3">🍲 อาหารพื้นเมืองขึ้นชื่อ</h2>
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <?php foreach ($province_info['famous_foods'] as $food): ?>
                        <div class="col">
                            <div class="d-flex align-items-center p-3 bg-light rounded border">
                                <span class="me-2 text-danger">✔</span>
                                <span><?= $food ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; <?= date('Y') ?> เว็บไซต์ข้อมูลท่องเที่ยวจังหวัดภูเก็ต | พัฒนาด้วย PHP & HTML</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="[suspicious link removed]"></script>
</body>
</html>
