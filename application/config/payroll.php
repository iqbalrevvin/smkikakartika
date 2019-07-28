<?php

$config['staffattendance'] = array(
    'hadir' => 1,
    'izin' => 2,
    'terlambat' => 3,
    'alpa' => 4,
    'libur' => 5,
    'sakit' => 6
);

$config['contracttype'] = array(
    'permanent' => 'Tetap',
    'probation' => 'Tidak Tetap',
);

$config['status'] = array(
    'approve' => 'Disetujui',
    'disapprove' => 'Tidak Disetujui',
    'pending' => 'Pending',
);

$config['marital_status'] = array(
    'Belum Menikah' => 'Belum Menikah',
    'Menikah' => 'Menikah',
    'Janda' => 'Janda',
    'Cerai' => 'Cerai',
    'Tidak Diketahui' => 'Tidak Diketahui',
);

$config['payroll_status'] = array(
    'generated' => 'Digenerate',
    'paid' => 'Dibayar',
    'unpaid' => 'Belum Di Bayar',
    'not_generate' => 'Belum Di Generate',
);
$config['payment_mode'] = array(
    'cash' => 'Cash',
    'cheque' => 'Cek',
    'online' => 'Transfer Ke Rekening Bank',
);
$config['enquiry_status'] = array(
    'active' => 'Active',
    'passive' => 'Passive',
    'dead' => 'Dead',
    'won' => 'Won',
    'lost' => 'Lost',
);
