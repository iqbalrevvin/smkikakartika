<?php

$config['staffattendance'] = array(
    'present' => 1,
    'half_day' => 2,
    'late' => 3,
    'absent' => 4,
    'holiday' => 5,
    'sakit' => 6,
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
