@extends('landing.master')
@include('tools.nav')

<div class="header">
    <h2>Input Data Peserta</h2>
</div>
<div class="nav-tabs">
    <div class="nav-link active" data-target="data-peserta">Data Peserta</div>
    <div class="nav-link" data-target="alamat">Alamat</div>
    <div class="nav-link" data-target="ubah-password">Ubah Password</div>
</div>

<div id="edit-data-popup" class="popup">
    <div class="popup-content">
    </div>
</div>
<div id="edit-alamat-popup" class="popup">
    <div class="popup-content">
    </div>
</div>
<script src="{{ asset('js/popup_ubah_data.js') }}"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('.nav-link');
        const contentSections = document.querySelectorAll('.content-section');
        const activeTabKey = 'activeTab';

        // Fungsi untuk mengaktifkan tab dan konten yang sesuai
        function activateTab(target) {
            // Remove active class from all nav-links
            navLinks.forEach(link => link.classList.remove('active'));
            // Hide all content sections
            contentSections.forEach(section => section.classList.remove('active'));

            // Add active class to the selected nav-link and show the corresponding content section
            document.querySelector(`.nav-link[data-target="${target}"]`).classList.add('active');
            document.getElementById(target).classList.add('active');
        }

        // Event listener untuk klik pada nav-links
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                // Simpan tab yang aktif di localStorage
                localStorage.setItem(activeTabKey, target);
                // Aktifkan tab yang sesuai
                activateTab(target);
            });
        });

        // const currentPage = window.location.pathname; // Ubah ini sesuai dengan penggunaan Laravel
        // if (currentPage.includes('settingAkun')) { // Ganti 'settingAkun' dengan route atau identifier yang sesuai
        //     activateTab('data-peserta'); // Sesuaikan dengan ID dari tab Ubah Password
        //     localStorage.setItem(activeTabKey, 'data-peserta'); // Simpan preferensi aktif di localStorage
        // } else {
        //     const activeTab = localStorage.getItem(activeTabKey);
        //     if (activeTab) {
        //         activateTab(activeTab);
        //     } else {
        //         const defaultTab = navLinks[0].getAttribute('data-target');
        //         activateTab(defaultTab);
        //     }
        // }
    });
</script>


