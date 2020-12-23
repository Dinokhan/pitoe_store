<?php

return [
    'invalid_vat_format' => 'ID yang diberikan memiliki format yang salah',
    'security-warning' => 'Ditemukan aktivitas yang mencurigakan!!!',
    'nothing-to-delete' => 'Tidak ada yang perlu dihapus',

    'layouts' => [
        'my-account' => 'Akun Saya',
        'profile' => 'Profil',
        'address' => 'Alamat',
        'reviews' => 'Ulasan',
        'wishlist' => 'Wishlist',
        'orders' => 'Pesanan',
        'downloadable-products' => 'Produk yang dapat diunduh'
    ],

    'common' => [
        'error' => 'Ada yang tidak beres, coba lagi nanti.',
        'no-result-found' => 'Kami tidak dapat menemukan catatan apa pun.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Home',
        'featured-products' => 'Produk Unggulan',
        'new-products' => 'Produk Baru',
        'verify-email' => 'Verifikasi akun email Anda',
        'resend-verify-email' => 'Mengirim ulang email verifikasi'
    ],

    'header' => [
        'title' => 'Akun',
        'dropdown-text' => 'Kelola Keranjang, Pesanan & Daftar Keinginan',
        'sign-in' => 'Masuk',
        'sign-up' => 'Daftar',
        'account' => 'Akun',
        'cart' => 'Keranjang',
        'profile' => 'Profil',
        'wishlist' => 'Wishlist',
        'cart' => 'Keranjang',
        'logout' => 'Keluar',
        'search-text' => 'Cari produk di sini'
    ],

    'minicart' => [
        'view-cart' => 'Lihat Keranjang Belanja',
        'checkout' => 'Checkout',
        'cart' => 'Keranjang',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Langganan Buletin',
        'subscribe' => 'Langganan',
        'locale' => 'Lokal',
        'currency' => 'Mata uang',
    ],

    'subscription' => [
        'unsubscribe' => 'Berhenti berlangganan',
        'subscribe' => 'Langganan',
        'subscribed' => 'Anda sekarang berlangganan email langganan.',
        'not-subscribed' => 'Anda tidak dapat berlangganan email langganan, coba lagi nanti.',
        'already' => 'Anda sudah berlangganan daftar langganan kami.',
        'unsubscribed' => 'Anda berhenti berlangganan email langganan.',
        'already-unsub' => 'Anda sudah berhenti berlangganan.',
        'not-subscribed' => 'Kesalahan! Surat tidak dapat dikirim saat ini, coba lagi nanti.'
    ],

    'search' => [
        'no-results' => 'Tidak ada hasil yang ditemukan',
        'page-title' => config('app.name') . ' - Search',
        'found-results' => 'Hasil Pencarian Ditemukan',
        'found-result' => 'Hasil Pencarian Ditemukan',
        'analysed-keywords' => 'Kata Kunci yang Dianalisis'
    ],

    'reviews' => [
        'title' => 'Judul',
        'add-review-page-title' => 'Tambahkan Review',
        'write-review' => 'Menulis review',
        'review-title' => 'Beri judul pada ulasan Anda',
        'product-review-page-title' => 'Review Produk',
        'rating-reviews' => 'Peringkat & Ulasan',
        'submit' => 'KIRIMKAN',
        'delete-all' => 'Semua Ulasan telah Berhasil dihapus',
        'ratingreviews' => ':rating Peringkat &:reviews Ulasan',
        'star' => 'Bintang',
        'percentage' => ':persentase %',
        'id-star' => 'bintang',
        'name' => 'Nama',
    ],

    'customer' => [
        'compare'           => [
            'text'                  => 'Bandingkan',
            'compare_similar_items' => 'Bandingkan Barang Serupa',
            'add-tooltip'           => 'Tambahkan produk untuk membandingkan daftar',
            'added'                 => 'Item berhasil ditambahkan untuk membandingkan daftar',
            'already_added'         => 'Item sudah ditambahkan untuk membandingkan daftar',
            'removed'               => 'Item berhasil dihapus dari daftar perbandingan',
            'removed-all'           => 'Semua item berhasil dihapus dari daftar perbandingan',
            'empty-text'            => "Anda tidak memiliki item apa pun dalam daftar perbandingan Anda",
            'product_image'         => 'Gambar Produk',
            'actions'               => 'Tindakan',
        ],

        'signup-text' => [
            'account_exists' => 'Sudah memiliki akun',
            'title' => 'Masuk'
        ],

        'signup-form' => [
            'page-title' => 'Buat Akun Pelanggan Baru',
            'title' => 'Daftar',
            'firstname' => 'Nama Depan',
            'lastname' => 'Nama Belakang',
            'email' => 'Email',
            'password' => 'Password',
            'confirm_pass' => 'Konfirmasi Password',
            'button_title' => 'Daftar',
            'agree' => 'Setuju',
            'terms' => 'Persyaratan',
            'conditions' => 'Kondisi',
            'using' => 'dengan menggunakan situs web ini',
            'agreement' => 'Persetujuan',
            'success' => 'Akun berhasil dibuat.',
            'success-verify' => 'Akun berhasil dibuat, email telah dikirim untuk verifikasi.',
            'success-verify-email-unsent' => 'Akun berhasil dibuat, tetapi email verifikasi tidak terkirim.',
            'failed' => 'Kesalahan! Tidak dapat membuat akun Anda, silakan coba lagi nanti.',
            'already-verified' => 'Akun Anda sudah diverifikasi Atau coba kirim email verifikasi baru lagi.',
            'verification-not-sent' => 'Kesalahan! Masalah dalam mengirim email verifikasi, silakan coba lagi nanti.',
            'verification-sent' => 'email verifikasi dikirim',
            'verified' => 'Akun Anda telah diverifikasi, coba login sekarang.',
            'verify-failed' => 'Kami tidak dapat memverifikasi akun email Anda.',
            'dont-have-account' => 'Anda tidak memiliki akun dengan kami.',
            'customer-registration' => 'Pelanggan Berhasil Mendaftar'
        ],

        'login-text' => [
            'no_account' => 'Tidak punya akun',
            'title' => 'Daftar',
        ],

        'login-form' => [
            'page-title' => 'Pembeli Login',
            'title' => 'Masuk',
            'email' => 'Email',
            'password' => 'Password',
            'forgot_pass' => 'Lupa Password?',
            'button_title' => 'Masuk',
            'remember' => 'Ingatkan Saya',
            'footer' => '© Copyright :year Trukajaya Software, All rights reserved',
            'invalid-creds' => 'Harap periksa kredensial Anda dan coba lagi.',
            'verify-first' => 'Verifikasi akun email Anda terlebih dahulu.',
            'not-activated' => 'Aktivasi Anda meminta persetujuan admin',
            'resend-verification' => 'Kirim ulang email verifikasi lagi'
        ],

        'forgot-password' => [
            'title' => 'Memulihkan Password',
            'email' => 'Email',
            'submit' => 'Kirim Email Reset Password',
            'page_title' => 'Lupa kata sandi Anda ?'
        ],

        'reset-password' => [
            'title' => 'Ganti Password',
            'email' => 'Email Terdaftar',
            'password' => 'Kata Sandi',
            'confirm-password' => 'Konfirmasi Password',
            'back-link-title' => 'Kembali ke Masuk',
            'submit-btn-title' => 'Atur Ulang Kata Sandi'
        ],

        'account' => [
            'dashboard' => 'Edit Profil',
            'menu' => 'Menu',

            'general' => [
                'no' => 'Tidak',
                'yes' => 'Ya',
            ],

            'profile' => [
                'index' => [
                    'page-title' => 'Profil',
                    'title' => 'Profil',
                    'edit' => 'Edit',
                ],

                'edit-success' => 'Profil berhasil diperbarui.',
                'edit-fail' => 'Kesalahan! Profil tidak dapat diperbarui, coba lagi nanti.',
                'unmatch' => 'Kata sandi lama tidak cocok.',

                'fname' => 'Nama Depan',
                'lname' => 'Nama Belakang',
                'gender' => 'Jenis Kelamin',
                'other' => 'Selain Itu',
                'male' => 'Laki - Laki',
                'female' => 'Perempuan',
                'dob' => 'Tanggal lahir',
                'phone' => 'No. Telepon',
                'email' => 'Email',
                'opassword' => 'Password Lama',
                'password' => 'Password',
                'cpassword' => 'Konfirmasi Password',
                'submit' => 'Perbarui Profil',

                'edit-profile' => [
                    'title' => 'Edit Profil',
                    'page-title' => 'Edit Profil'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Alamat',
                    'title' => 'Alamat',
                    'add' => 'Tambahkan alamat',
                    'edit' => 'Edit',
                    'empty' => 'Anda tidak memiliki alamat yang disimpan di sini, coba buat dengan mengklik tombol tambah.',
                    'create' => 'Buat Alamat',
                    'delete' => 'Menghapus',
                    'make-default' => 'Jadikan Default',
                    'default' => 'Default',
                    'contact' => 'Kontak',
                    'confirm-delete' =>  'Apakah Anda benar-benar ingin menghapus alamat ini?',
                    'default-delete' => 'Alamat default tidak dapat diubah.',
                    'enter-password' => 'Masukkan Kata Sandi Anda.',
                ],

                'create' => [
                    'page-title' => 'Tambahkan alamat',
                    'company_name' => 'Nama perusahaan',
                    'first_name' => 'Nama depan',
                    'last_name' => 'Nama keluarga',
                    'vat_id' => 'Vat id',
                    'vat_help_note' => '[Note: Gunakan Kode Negara dengan ID PPN. Misalnya. INV01234567891]',
                    'title' => 'Tambahkan alamat',
                    'street-address' => 'Alamat jalan',
                    'country' => 'Negara',
                    'state' => 'Negara',
                    'select-state' => 'Pilih suatu wilayah, negara bagian atau provinsi',
                    'city' => 'Kota',
                    'postcode' => 'Kode Pos',
                    'phone' => 'Telepon',
                    'submit' => 'Simpan Alamat',
                    'success' => 'Alamat telah berhasil ditambahkan.',
                    'error' => 'Alamat tidak dapat ditambahkan.'
                ],

                'edit' => [
                    'page-title' => 'Edit Alamat',
                    'company_name' => 'Nama Perusahaan',
                    'first_name' => 'Nama Depan',
                    'last_name' => 'Nama Keluarga',
                    'vat_id' => 'Vat id',
                    'title' => 'Edit Alamat',
                    'street-address' => 'Alamat Jalan',
                    'submit' => 'Simpan Alamat',
                    'success' => 'Alamat diperbarui berhasil.',
                ],
                'delete' => [
                    'success' => 'Alamat berhasil dihapus',
                    'failure' => 'Alamat tidak dapat dihapus',
                    'wrong-password' => 'Kata sandi salah !'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'Pesanan',
                    'title' => 'Pesanan',
                    'order_id' => 'Pesanan ID',
                    'date' => 'Tanggal',
                    'status' => 'Status',
                    'total' => 'Total',
                    'order_number' => 'Pesanan Jumlah',
                    'processing' => 'Pengolahan',
                    'completed' => 'Lengkap',
                    'canceled' => 'Dibatalkan',
                    'closed' => 'Tutup',
                    'pending' => 'Menunggu keputusan',
                    'pending-payment' => 'Menunggu keputusan Pembayaran',
                    'fraud' => 'Penipuan'
                ],

                'view' => [
                    'page-tile' => 'Pesanan #:order_id',
                    'info' => 'Informasi',
                    'placed-on' => 'Ditempatkan Di',
                    'products-ordered' => 'Produk Dipesan',
                    'invoices' => 'Faktur',
                    'shipments' => 'Pengiriman',
                    'SKU' => 'SKU',
                    'product-name' => 'Nama',
                    'qty' => 'Jml',
                    'item-status' => 'Status Item',
                    'item-ordered' => 'Dipesan (:qty_ordered)',
                    'item-invoice' => 'Ditagih (:qty_invoiced)',
                    'item-shipped' => 'Dikirim (:qty_shipped)',
                    'item-canceled' => 'Dibatalkan (:qty_canceled)',
                    'item-refunded' => 'Dikembalikan (:qty_refunded)',
                    'price' => 'Harga',
                    'total' => 'Total',
                    'subtotal' => 'Subtotal',
                    'shipping-handling' => 'Pengiriman & Penanganan',
                    'tax' => 'Pajak',
                    'discount' => 'Diskon',
                    'tax-percent' => 'Persen Pajak',
                    'tax-amount' => 'Jumlah Pajak',
                    'discount-amount' => 'Jumlah diskon',
                    'grand-total' => 'Total keseluruhan',
                    'total-paid' => 'Total Dibayar',
                    'total-refunded' => 'Total Dana Dikembalikan',
                    'total-due' => 'Total Hutang',
                    'shipping-address' => 'Alamat Pengiriman',
                    'billing-address' => 'alamat tagihan',
                    'shipping-method' => 'metode pengiriman',
                    'payment-method' => 'Cara Pembayaran',
                    'individual-invoice' => 'Faktur #:invoice_id',
                    'individual-shipment' => 'Pengiriman #:shipment_id',
                    'print' => 'Mencetak',
                    'invoice-id' => 'ID faktur',
                    'order-id' => 'Id pemesanan',
                    'order-date' => 'Tanggal pemesanan',
                    'bill-to' => 'Pembayaran kepada',
                    'ship-to' => 'Dikirim ke',
                    'contact' => 'Kontak',
                    'refunds' => 'Pengembalian uang',
                    'individual-refund' => 'Pengembalian dana #:refund_id',
                    'adjustment-refund' => 'Pengembalian Dana Penyesuaian',
                    'adjustment-fee' => 'Biaya Penyesuaian',
                    'cancel-btn-title' => 'Membatalkan',
                    'tracking-number' => 'Melacak nomor',
                    'cancel-confirm-msg' => 'Apakah Anda yakin ingin membatalkan pesanan ini?'
                ]
            ],

            'wishlist' => [
                'page-title' => 'Wishlist',
                'title' => 'Wishlist',
                'deleteall' => 'Hapus semua',
                'moveall' => 'Pindahkan Semua Produk Ke Keranjang',
                'move-to-cart' => 'Pindah ke Keranjang',
                'error' => 'Tidak dapat menambahkan produk ke wishlist karena masalah yang tidak diketahui, silakan periksa kembali nanti',
                'add' => 'Item berhasil ditambahkan ke daftar keinginan',
                'remove' => 'Item berhasil dihapus dari daftar keinginan',
                'add-wishlist-text'     => 'Tambahkan produk ke daftar keinginan',
                'remove-wishlist-text'  => 'Hapus produk dari daftar keinginan',
                'moved' => 'Item berhasil dipindahkan ke keranjang',
                'option-missing' => 'Pilihan produk tidak ada, jadi item tidak dapat dipindahkan ke wishlist.',
                'move-error' => 'Item tidak dapat dipindahkan ke daftar keinginan, Silakan coba lagi nanti',
                'success' => 'Item berhasil ditambahkan ke daftar keinginan',
                'failure' => 'Item tidak dapat ditambahkan ke daftar keinginan, Silakan coba lagi nanti',
                'already' => 'Item sudah ada di daftar keinginan Anda',
                'removed' => 'Item berhasil dihapus dari daftar keinginan',
                'remove-fail' => 'Item tidak dapat dihapus dari daftar keinginan, Silakan coba lagi nanti',
                'empty' => 'Anda tidak memiliki item apa pun di daftar keinginan Anda',
                'remove-all-success' => 'Semua item dari daftar keinginan Anda telah dihapus',
            ],

            'downloadable_products' => [
                'title' => 'Produk yang Dapat Diunduh',
                'order-id' => 'Id pemesanan',
                'date' => 'Tanggal',
                'name' => 'Judul',
                'status' => 'Status',
                'pending' => 'Menunggu keputusan',
                'available' => 'Tersedia',
                'expired' => 'Kedaluwarsa',
                'remaining-downloads' => 'Unduhan Tersisa',
                'unlimited' => 'Tak terbatas',
                'download-error' => 'Tautan unduhan telah kedaluwarsa.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Ulasan',
                    'page-title' => 'Ulasan'
                ],

                'view' => [
                    'page-tile' => 'Ulasan #:id',
                ]
            ]
        ]
    ],

    'products' => [
        'layered-nav-title' => 'Belanja Oleh',
        'price-label' => 'Serendah',
        'remove-filter-link-title' => 'Bersihkan semua',
        'filter-to' => 'untuk',
        'sort-by' => 'Sortir dengan',
        'from-a-z' => 'Dari A-Z',
        'from-z-a' => 'Dari Z-A',
        'newest-first' => 'Pertama Terbaru',
        'oldest-first' => 'Terlama Dulu',
        'cheapest-first' => 'Termurah Dulu',
        'expensive-first' => 'Mahal Pertama',
        'show' => 'Menunjukkan',
        'pager-info' => 'Menampilkan :showing of :total Items',
        'description' => 'Deskripsi',
        'specification' => 'Spesifikasi',
        'total-reviews' => ':total Ulasan',
        'total-rating' => ':total_rating Peringkat & :total_reviews Ulasan',
        'by' => 'Oleh :name',
        'up-sell-title' => 'Kami menemukan produk lain yang mungkin Anda sukai!',
        'related-product-title' => 'Produk-produk terkait',
        'cross-sell-title' => 'Lebih banyak pilihan',
        'reviews-title' => 'Peringkat & Ulasan',
        'write-review-btn' => 'Menulis ulasan',
        'choose-option' => 'Pilih salah satu opsi',
        'sale' => 'Penjualan',
        'new' => 'Baru',
        'empty' => 'Tidak ada produk yang tersedia dalam kategori ini',
        'add-to-cart' => 'Masukkan ke keranjang',
        'book-now' => 'Pesan sekarang',
        'buy-now' => 'Beli sekarang',
        'whoops' => 'Ups!',
        'quantity' => 'Kuantitas',
        'in-stock' => 'Persediaan',
        'out-of-stock' => 'Kehabisan persediaan',
        'view-all' => 'Lihat semua',
        'select-above-options' => 'Harap pilih opsi di atas terlebih dahulu.',
        'less-quantity' => 'Kuantitas tidak boleh kurang dari satu.',
        'samples' => 'Sampel',
        'links' => 'Tautan',
        'sample' => 'Sampel',
        'name' => 'Nama',
        'qty' => 'Jml',
        'starting-at' => 'Mulai dari',
        'customize-options' => 'Sesuaikan Opsi',
        'choose-selection' => 'Pilih satu pilihan',
        'your-customization' => 'Kustomisasi Anda',
        'total-amount' => 'Jumlah total',
        'none' => 'Tidak ada',
        'available-for-order' => 'Tersedia untuk Pemesanan',
        'settings' => 'Pengaturan',
        'compare_options' => 'Bandingkan Opsi',
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Pilih opsi sebelum membeli produk ini.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Beberapa bidang wajib tidak ada untuk produk ini.',
                'missing_options' => 'Pilihan tidak ada untuk produk ini.',
                'missing_links' => 'Tautan yang dapat diunduh tidak ada untuk produk ini.',
                'qty_missing' => 'Setidaknya satu produk harus memiliki lebih dari 1 kuantitas.',
                'qty_impossible' => 'Tidak dapat menambahkan lebih dari satu produk ini ke keranjang.'
            ],
            'create-error' => 'Mengalami beberapa masalah saat membuat contoh keranjang.',
            'title' => 'Kereta Belanja',
            'empty' => 'Keranjang belanja anda kosong',
            'update-cart' => 'Perbarui Keranjang',
            'continue-shopping' => 'Lanjutkan Belanja',
            'proceed-to-checkout' => 'Lanjutkan ke pembayaran',
            'remove' => 'Menghapus',
            'remove-link' => 'Menghapus',
            'move-to-wishlist' => 'Pindah ke Daftar Keinginan',
            'move-to-wishlist-success' => 'Item berhasil dipindahkan ke daftar keinginan.',
            'move-to-wishlist-error' => 'Tidak dapat memindahkan item ke daftar keinginan, coba lagi nanti.',
            'add-config-warning' => 'Pilih opsi sebelum menambahkan ke keranjang.',
            'quantity' => [
                'quantity' => 'Kuantitas',
                'success' => 'Item Keranjang berhasil diperbarui.',
                'illegal' => 'Kuantitas tidak boleh kurang dari satu.',
                'inventory_warning' => 'Kuantitas yang diminta tidak tersedia, coba lagi nanti.',
                'error' => 'Tidak dapat memperbarui item saat ini, coba lagi nanti.'
            ],

            'item' => [
                'error_remove' => 'Tidak ada item untuk dihapus dari gerobak.',
                'success' => 'Item berhasil ditambahkan ke keranjang.',
                'success-remove' => 'Item berhasil dihapus dari keranjang.',
                'error-add' => 'Item tidak dapat ditambahkan ke keranjang, coba lagi nanti.',
                'inactive' => 'Item tidak aktif dan telah dihapus dari keranjang.',
                'inactive-add' => 'Item yang tidak aktif tidak dapat ditambahkan ke keranjang.',
            ],
            'quantity-error' => 'Kuantitas yang diminta tidak tersedia.',
            'cart-subtotal' => 'Jumlah Keranjang',
            'cart-remove-action' => 'Apakah Anda benar-benar ingin melakukan ini?',
            'partial-cart-update' => 'Hanya beberapa produk yang diperbarui',
            'link-missing' => '',
            'event' => [
                'expired' => 'Acara ini telah berakhir.'
            ]
        ],

        'onepage' => [
            'title' => 'Periksa',
            'information' => 'Informasi',
            'shipping' => 'Pengiriman',
            'payment' => 'Pembayaran',
            'complete' => 'Lengkap',
            'review' => 'Ulasan',
            'billing-address' => 'Alamat Tagihan',
            'sign-in' => 'Masuk',
            'company-name' => 'Nama Perusahaan',
            'first-name' => 'Nama depan',
            'last-name' => 'Nama keluarga',
            'email' => 'Surel',
            'address1' => 'Alamat jalan',
            'city' => 'Kota',
            'state' => 'Negara',
            'select-state' => 'Pilih wilayah, negara bagian atau provinsi',
            'postcode' => 'Kode Pos',
            'phone' => 'Telepon',
            'country' => 'Negara',
            'order-summary' => 'Ringkasan Pesanan',
            'shipping-address' => 'Alamat Pengiriman',
            'use_for_shipping' => 'Kirim ke Alamat ini',
            'continue' => 'Terus',
            'shipping-method' => 'Pilih metode pengiriman',
            'payment-methods' => 'Pilih metode pembayaran',
            'payment-method' => 'Cara Pembayaran',
            'summary' => 'Ringkasan Pesanan',
            'price' => 'Harga',
            'quantity' => 'Kuantitas',
            'billing-address' => 'Alamat Tagihan',
            'shipping-address' => 'Alamat Pengiriman',
            'contact' => 'Kontak',
            'place-order' => 'Tempatkan Pesanan',
            'new-address' => 'Tambahkan alamat baru',
            'save_as_address' => 'Simpan alamat ini',
            'apply-coupon' => 'Terapkan Kupon',
            'amt-payable' => 'Jumlah Hutang',
            'got' => 'Punya',
            'free' => 'Gratis',
            'coupon-used' => 'Kupon Digunakan',
            'applied' => 'Terapan',
            'back' => 'Kembali',
            'cash-desc' => 'Bayar di tempat',
            'money-desc' => 'Transfer uang',
            'paypal-desc' => 'Standar Paypal',
            'free-desc' => 'Ini adalah pengiriman gratis',
            'flat-desc' => 'Ini adalah tarif tetap',
            'password' => 'Password',
            'login-exist-message' => 'Anda sudah memiliki akun dengan kami, Masuk atau lanjutkan sebagai tamu.',
            'enter-coupon-code' => 'Masukkan kode kupon'
        ],

        'total' => [
            'order-summary' => 'Ringkasan Pesanan',
            'sub-total' => 'Item',
            'grand-total' => 'Total keseluruhan',
            'delivery-charges' => 'Ongkos kirim',
            'tax' => 'Pajak',
            'discount' => 'Diskon',
            'price' => 'harga',
            'disc-amount' => 'Jumlah yang didiskon',
            'new-grand-total' => 'Grand Total Baru',
            'coupon' => 'Kupon',
            'coupon-applied' => 'Kupon yang Diterapkan',
            'remove-coupon' => 'Hapus Kupon',
            'cannot-apply-coupon' => 'Tidak Dapat Menerapkan Kupon',
            'invalid-coupon' => 'Kode kupon tidak valid.',
            'success-coupon' => 'Kode kupon berhasil diterapkan.',
            'coupon-apply-issue' => 'Kode kupon tidak dapat diterapkan.'
        ],

        'success' => [
            'title' => 'Pesanan berhasil dilakukan',
            'thanks' => 'Terima kasih atas pesanan anda!',
            'order-id-info' => 'Id pesanan Anda adalah #:order_id',
            'info' => 'Kami akan mengirimkan email kepada Anda, detail pesanan Anda, dan informasi pelacakan'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Konfirmasi Pesanan Baru',
            'heading' => 'Konfirmasi pesanan!',
            'dear' => 'terhormat :customer_name',
            'dear-admin' => 'terhormat :admin_name',
            'greeting' => 'Terima kasih atas Pesanan Anda: order_id ditempatkan pada :created_at',
            'greeting-admin' => 'Id pemesanan :order_id placed on :created_at',
            'summary' => 'Ringkasan Pesanan',
            'shipping-address' => 'Alamat Pengiriman',
            'billing-address' => 'Alamat Tagihan',
            'contact' => 'Kontak',
            'shipping' => 'metode pengiriman',
            'payment' => 'Cara Pembayaran',
            'price' => 'Harga',
            'quantity' => 'Kuantitas',
            'subtotal' => 'Subtotal',
            'shipping-handling' => 'Pengiriman & Penanganan',
            'tax' => 'Pajak',
            'discount' => 'Diskon',
            'grand-total' => 'Total keseluruhan',
            'final-summary' => 'Terima kasih telah menunjukkan minat Anda di toko kami, kami akan mengirimkan nomor pelacakan setelah dikirim',
            'help' => 'Jika Anda membutuhkan bantuan apa pun, harap hubungi kami di :support_email',
            'thanks' => 'Terima kasih!',

            'comment' => [
                'subject' => 'Komentar baru ditambahkan ke pesanan Anda #:order_id',
                'dear' => 'terhormat :customer_name',
                'final-summary' => 'Terima kasih telah menunjukkan minat Anda pada toko kami',
                'help' => 'Jika Anda membutuhkan bantuan apa pun, harap hubungi kami di :support_email',
                'thanks' => 'Terima kasih!',
            ],

            'cancel' => [
                'subject' => 'Konfirmasi Pembatalan Pesanan',
                'heading' => 'Pesanan Dibatalkan',
                'dear' => 'Yang Terhormat :customer_name',
                'greeting' => 'Pesanan Anda dengan id pesanan :order_id ditempatkan di :created_at telah dibatalkan',
                'summary' => 'Ringkasan Pesanan',
                'shipping-address' => 'Alamat Pengiriman',
                'billing-address' => 'Alamat Tagihan',
                'contact' => 'Kontak',
                'shipping' => 'metode pengiriman',
                'payment' => 'Cara Pembayaran',
                'subtotal' => 'Subtotal',
                'shipping-handling' => 'Pengiriman & Penanganan',
                'tax' => 'Pajak',
                'discount' => 'Diskon',
                'grand-total' => 'Total keseluruhan',
                'final-summary' => 'Terima kasih telah menunjukkan minat Anda pada toko kami',
                'help' => 'Jika Anda membutuhkan bantuan apa pun, harap hubungi kami di :support_email',
                'thanks' => 'Terima kasih!',
            ]
        ],

        'invoice' => [
            'heading' => 'Faktur Anda #:invoice_id untuk Order #:order_id',
            'subject' => 'Faktur untuk pesanan Anda #:order_id',
            'summary' => 'Ringkasan Faktur',
        ],

        'shipment' => [
            'heading' => 'Pengiriman #:shipment_id  telah dibuat untuk Order #:order_id',
            'inventory-heading' => 'Pengiriman baru #:shipment_id telah dibuat untuk Order #:order_id',
            'subject' => 'Pengiriman untuk pesanan Anda #:order_id',
            'inventory-subject' => 'Pengiriman baru telah dibuat untuk Order #:order_id',
            'summary' => 'Ringkasan Pengiriman',
            'carrier' => 'Pembawa',
            'tracking-number' => 'Melacak nomor',
            'greeting' => 'Perintah :order_id telah ditempatkan di :created_at',
        ],

        'refund' => [
            'heading' => 'Pengembalian Dana Anda #:refund_id untuk Order #:order_id',
            'subject' => 'Pengembalian dana untuk pesanan Anda #:order_id',
            'summary' => 'Ringkasan Pengembalian Dana',
            'adjustment-refund' => 'Pengembalian Dana Penyesuaian',
            'adjustment-fee' => 'Biaya Penyesuaian'
        ],

        'forget-password' => [
            'subject' => 'Pelanggan Atur Ulang Kata Sandi',
            'dear' => 'terhormat :name',
            'info' => 'Anda menerima email ini karena kami menerima permintaan pengaturan ulang kata sandi untuk akun Anda',
            'reset-password' => 'Atur Ulang Kata Sandi',
            'final-summary' => 'Jika Anda tidak meminta pengaturan ulang kata sandi, tidak ada tindakan lebih lanjut yang diperlukan',
            'thanks' => 'Terima kasih!'
        ],

        'update-password' => [
            'subject' => 'Sandi Diperbarui',
            'dear' => 'Yang Terhormat :name',
            'info' => 'Anda menerima email ini karena Anda telah memperbarui kata sandi Anda.',
            'thanks' => 'Terima kasih!'
        ],

        'customer' => [
            'new' => [
                'dear' => 'Yang Terhormat :customer_name',
                'username-email' => 'UserName / Email',
                'subject' => 'Pendaftaran Pelanggan Baru',
                'password' => 'Kata sandi',
                'summary' => 'Akun anda telah dibuat.
                Your account details are below: ',
                'thanks' => 'Terima kasih!',
            ],

            'registration' => [
                'subject' => 'Pendaftaran Pelanggan Baru',
                'customer-registration' => 'Pelanggan Berhasil Mendaftar',
                'dear' => 'Yang Terhormat :customer_name',
                'greeting' => 'Selamat datang dan terima kasih telah mendaftar dengan kami!',
                'summary' => 'Akun Anda sekarang telah berhasil dibuat dan Anda dapat login menggunakan alamat email dan kredensial kata sandi Anda. Setelah masuk, Anda akan dapat mengakses layanan lain termasuk meninjau pesanan sebelumnya, daftar keinginan, dan mengedit informasi akun Anda.',
                'thanks' => 'Terima kasih!',
            ],

            'verification' => [
                'heading' => config('app.name') . ' - Verifikasi email',
                'subject' => 'Surat Verifikasi',
                'verify' => 'Verifikasi akun anda',
                'summary' => 'Ini adalah email untuk memverifikasi bahwa alamat email yang Anda masukkan adalah milik Anda.
                Silakan klik tombol Verifikasi Akun Anda di bawah ini untuk memverifikasi akun Anda.'
            ],

            'subscription' => [
                'subject' => 'Email Berlangganan',
                'greeting' => ' Selamat Datang di ' . config('app.name') . ' - Berlangganan Email',
                'unsubscribe' => 'Berhenti berlangganan',
                'summary' => 'Terima kasih telah memasukkan saya ke kotak masuk Anda. Sudah lama sekali Anda tidak membaca ' . config('app.name') . ' email, dan kami tidak ingin membanjiri kotak masuk Anda. Jika Anda masih tidak ingin menerima
                berita pemasaran email terbaru maka pasti klik tombol di bawah ini.'
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year PT. Trukajaya Software, All rights reserved',
    ],

    'response' => [
        'create-success' => ':name berhasil dibuat.',
        'update-success' => ':name berhasil diperbarui.',
        'delete-success' => ':name berhasil dihapus.',
        'submit-success' => ':name berhasil dikirim.'
    ],
];
