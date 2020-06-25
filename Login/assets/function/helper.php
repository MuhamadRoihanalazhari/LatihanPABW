<?php

define("BASE_URL", "http://localhost/sik/");

function access_menu($Posisi) {
    if ($Posisi == "Pasien") {
        echo "<ul class='sidebar-menu'>
                <li class='treeview'>
                    <a href='".BASE_URL."dashboard'>
                        <i class='icon icon-dashboard2 s-24'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon icon-person_pin s-24'></i>Pasien<i
                                class='icon icon-angle-left pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."data-pasien'><i class='icon icon-circle-o'></i>Semua Pasien</a>
                        </li>
                        <li><a href='".BASE_URL."form-pasien'><i class='icon icon-add'></i>Daftar</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon-user-md s-24'></i>Dokter<i
                                class='icon icon-angle-left  pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-dokter'><i class='icon icon-circle-o'></i>Jadwal Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-stethoscope s-24'></i>
                        <i class='icon icon-angle-left pull-right'></i>
                        <span>Perawat</span>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-perawat'><i class='icon icon-circle-o'></i>Shift
                                Perawat</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-heartbeat s-24'></i><span>Administrasi</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."administrasi'><i class='icon icon-circle-o'></i>Administrasi</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-local_hospital s-24'></i><span>Labor</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."labor'><i class='icon icon-circle-o'></i><span>Labor</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-room s-24'></i><span>Ruangan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."ruangan'><i class='icon icon-circle-o'></i>Ruangan</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-hospital-o s-24'></i>
                        <span>Rawat Inap</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-inap'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Inap</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-ambulance s-24'></i>
                        <span>Rawat Jalan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-jalan'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Jalan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>";
    } elseif ($Posisi == "Dokter") {
        echo "<ul class='sidebar-menu'>
                <li class='treeview'>
                    <a href='".BASE_URL."dashboard'>
                        <i class='icon icon-dashboard2 s-24'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon icon-person_pin s-24'></i>Pasien<i
                                class='icon icon-angle-left pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."data-pasien'><i class='icon icon-circle-o'></i>Semua Pasien</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon-user-md s-24'></i>Dokter<i
                                class='icon icon-angle-left  pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-dokter'><i class='icon icon-circle-o'></i>Jadwal Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-stethoscope s-24'></i>
                        <i class='icon icon-angle-left pull-right'></i>
                        <span>Perawat</span>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-perawat'><i class='icon icon-circle-o'></i>Shift
                                Perawat</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-local_hospital s-24'></i><span>Labor</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."labor'><i class='icon icon-circle-o'></i><span>Labor</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-room s-24'></i><span>Ruangan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."ruangan'>
                                <i class='icon icon-circle-o'></i>Ruangan</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-hospital-o s-24'></i>
                        <span>Rawat Inap</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-inap'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Inap</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-ambulance s-24'></i>
                        <span>Rawat Jalan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-jalan'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Jalan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>";
    } elseif ($Posisi == "Perawat") {
        echo "<ul class='sidebar-menu'>
                <li class='treeview'>
                    <a href='".BASE_URL."dashboard'>
                        <i class='icon icon-dashboard2 s-24'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon icon-person_pin s-24'></i>Pasien<i
                                class='icon icon-angle-left pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."data-pasien'><i class='icon icon-circle-o'></i>Semua Pasien</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon-user-md s-24'></i>Dokter<i
                                class='icon icon-angle-left  pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-dokter'><i class='icon icon-circle-o'></i>Jadwal Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-stethoscope s-24'></i>
                        <i class='icon icon-angle-left pull-right'></i>
                        <span>Perawat</span>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-perawat'><i class='icon icon-circle-o'></i>Shift
                                Perawat</a>
                        </li>
                        <li><a href='".BASE_URL."tindakan-perawat'><i class='icon icon-add'></i>Tindakan</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-local_hospital s-24'></i><span>Labor</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."labor'><i class='icon icon-circle-o'></i><span>Labor</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-room s-24'></i><span>Ruangan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."ruangan'>
                                <i class='icon icon-circle-o'></i>Ruangan</a>
                        </li>
                        <li><a href='".BASE_URL."form-ruangan'><i class='icon icon-add'></i>Tambah</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-hospital-o s-24'></i>
                        <span>Rawat Inap</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-inap'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Inap</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-ambulance s-24'></i>
                        <span>Rawat Jalan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-jalan'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Jalan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>";
    } elseif ($Posisi == "Farmasi") {
        echo "<ul class='sidebar-menu'>
                <li class='treeview'>
                    <a href='".BASE_URL."dashboard'>
                        <i class='icon icon-dashboard2 s-24'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon icon-person_pin s-24'></i>Pasien<i
                                class='icon icon-angle-left pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."data-pasien'><i class='icon icon-circle-o'></i>Semua Pasien</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon-user-md s-24'></i>Dokter<i
                                class='icon icon-angle-left  pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-dokter'><i class='icon icon-circle-o'></i>Jadwal Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-stethoscope s-24'></i>
                        <i class='icon icon-angle-left pull-right'></i>
                        <span>Perawat</span>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-perawat'><i class='icon icon-circle-o'></i>Shift
                        Perawat</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-medkit s-24'></i><span>Farmasi</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."apotik'><i class='icon icon-circle-o'></i>Farmasi</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-local_hospital s-24'></i><span>Labor</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."labor'><i class='icon icon-circle-o'></i><span>Labor</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-room s-24'></i><span>Ruangan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."ruangan'>
                                <i class='icon icon-circle-o'></i>Ruangan</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-hospital-o s-24'></i>
                        <span>Rawat Inap</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-inap'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Inap</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-ambulance s-24'></i>
                        <span>Rawat Jalan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-jalan'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Jalan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>";
    } elseif ($Posisi == "Analis") {
        echo "<ul class='sidebar-menu'>
                <li class='treeview'>
                    <a href='".BASE_URL."dashboard'>
                        <i class='icon icon-dashboard2 s-24'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon icon-person_pin s-24'></i>Pasien<i
                                class='icon icon-angle-left pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."data-pasien'><i class='icon icon-circle-o'></i>Semua Pasien</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon-user-md s-24'></i>Dokter<i
                                class='icon icon-angle-left  pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-dokter'><i class='icon icon-circle-o'></i>Jadwal Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-stethoscope s-24'></i>
                        <i class='icon icon-angle-left pull-right'></i>
                        <span>Perawat</span>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-perawat'><i class='icon icon-circle-o'></i>Shift 
                        Perawat</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-local_hospital s-24'></i><span>Labor</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."labor'><i class='icon icon-circle-o'></i><span>Labor</span></a>
                        </li>
                        <li><a href='".BASE_URL."data'><i class='icon icon-add'></i>Tambah</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-room s-24'></i><span>Ruangan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."ruangan'>
                                <i class='icon icon-circle-o'></i>Ruangan</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-hospital-o s-24'></i>
                        <span>Rawat Inap</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-inap'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Inap</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-ambulance s-24'></i>
                        <span>Rawat Jalan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-jalan'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Jalan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>";
    } elseif ($Posisi == "Admin") {
        echo "<ul class='sidebar-menu'>
                <li class='treeview'>
                    <a href='".BASE_URL."dashboard'>
                        <i class='icon icon-dashboard2 s-24'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon icon-person_pin s-24'></i>Pasien<i
                                class='icon icon-angle-left pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."data-pasien'><i class='icon icon-circle-o'></i>Semua Pasien</a>
                        </li>
                        <li><a href='".BASE_URL."form-pasien'><i class='icon icon-add'></i>Daftar</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon-user-md s-24'></i>Dokter<i
                                class='icon icon-angle-left  pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-dokter'><i class='icon icon-circle-o'></i>Jadwal Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-stethoscope s-24'></i>
                        <i class='icon icon-angle-left pull-right'></i>
                        <span>Perawat</span>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-perawat'><i class='icon icon-circle-o'></i>Shift 
                        Perawat</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-medkit s-24'></i><span>Farmasi</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."apotik'><i class='icon icon-circle-o'></i>Farmasi</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-heartbeat s-24'></i><span>Administrasi</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."form-administrasi'><i class='icon icon-circle-o'></i>Administrasi</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-local_hospital s-24'></i><span>Labor</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."labor'><i class='icon icon-circle-o'></i><span>Labor</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-room s-24'></i><span>Ruangan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."ruangan'>
                                <i class='icon icon-circle-o'></i>Ruangan</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-hospital-o s-24'></i>
                        <span>Rawat Inap</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-inap'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Inap</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-ambulance s-24'></i>
                        <span>Rawat Jalan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-jalan'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Jalan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>";
    } elseif ($Posisi == "Penanggung Jawab Rawat Inap") {
        echo "<ul class='sidebar-menu'>
                <li class='treeview'>
                    <a href='".BASE_URL."dashboard'>
                        <i class='icon icon-dashboard2 s-24'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon icon-person_pin s-24'></i>Pasien<i
                                class='icon icon-angle-left pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."data-pasien'><i class='icon icon-circle-o'></i>Semua Pasien</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon-user-md s-24'></i>Dokter<i
                                class='icon icon-angle-left  pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-dokter'><i class='icon icon-circle-o'></i>Jadwal Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-stethoscope s-24'></i>
                        <i class='icon icon-angle-left pull-right'></i>
                        <span>Perawat</span>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-perawat'><i class='icon icon-circle-o'></i>Shift 
                        Perawat</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-local_hospital s-24'></i><span>Labor</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."labor'><i class='icon icon-circle-o'></i><span>Labor</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-room s-24'></i><span>Ruangan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."ruangan'>
                                <i class='icon icon-circle-o'></i>Ruangan</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-hospital-o s-24'></i>
                        <span>Rawat Inap</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-inap'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Inap</span></a>
                        </li>
                        <li><a href='".BASE_URL."form-rawat-inap'><i class='icon icon-add'></i>Tambah</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-ambulance s-24'></i>
                        <span>Rawat Jalan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-jalan'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Jalan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>";
    } elseif ($Posisi == "Penanggung Jawab Rawat Jalan") {
        echo "<ul class='sidebar-menu'>
                <li class='treeview'>
                    <a href='".BASE_URL."dashboard'>
                        <i class='icon icon-dashboard2 s-24'></i><span>Dashboard</span>
                    </a>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon icon-person_pin s-24'></i>Pasien<i
                                class='icon icon-angle-left pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."data-pasien'><i class='icon icon-circle-o'></i>Semua Pasien</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'><i class='icon icon-user-md s-24'></i>Dokter<i
                                class='icon icon-angle-left  pull-right'></i></a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-dokter'><i class='icon icon-circle-o'></i>Jadwal Dokter</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-stethoscope s-24'></i>
                        <i class='icon icon-angle-left pull-right'></i>
                        <span>Perawat</span>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."jadwal-perawat'><i class='icon icon-circle-o'></i>Shift 
                        Perawat</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-local_hospital s-24'></i><span>Labor</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."labor'><i class='icon icon-circle-o'></i><span>Labor</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'>
                    <a href='#'>
                        <i class='icon icon-room s-24'></i><span>Ruangan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li><a href='".BASE_URL."ruangan'>
                                <i class='icon icon-circle-o'></i>Ruangan</a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-hospital-o s-24'></i>
                        <span>Rawat Inap</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-inap'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Inap</span></a>
                        </li>
                    </ul>
                </li>
                <li class='treeview'><a href='#'>
                        <i class='icon icon-ambulance s-24'></i>
                        <span>Rawat Jalan</span>
                        <i class='icon icon-angle-left pull-right'></i>
                    </a>
                    <ul class='treeview-menu'>
                        <li>
                            <a href='".BASE_URL."rawat-jalan'>
                                <i class='icon icon-circle-o'></i>
                                <span>Rawat Jalan</span>
                            </a>
                        </li>
                        <li><a href='".BASE_URL."form-rawat-jalan'><i class='icon icon-add'></i>Tambah</a>
                        </li>
                    </ul>
                </li>
            </ul>";
    }
}