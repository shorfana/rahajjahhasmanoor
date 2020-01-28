<div class="main-menu-content">
            <ul class="navigation navigation-main" id="sidebar" data-menu="menu-navigation">
                <li class="nav-item"><a href="<?= base_url()?>admin"><i class="feather icon-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <li class="nav-item"><a href="<?= base_url()?>admin/pembagian_kelas"><i class="feather icon-server"></i><span class="menu-title" data-i18n="">Pembagian Kelas</span></a>
                </li>
                <!-- <li class="nav-item"><a href="<?php base_url() ?>admin/pembagian_kelas"><i class="feather icon-server"></i><span class="menu-title" data-i18n="">Pembagian Kelas</span></a>
                </li> -->
                <!-- <li class="nav-item"><a href="<?= base_url()?>admin/guru"><i class="feather icon-home"></i><span class="menu-title" data-i18n="">Data Guru</span></a>
                </li>
                <li class="nav-item"><a href="<?= base_url()?>admin/ortu"><i class="feather icon-home"></i><span class="menu-title" data-i18n="">Data Orang Tua </span></a>
                </li>
                <li class="nav-item"><a href="<?= base_url()?>admin/siswa"><i class="feather icon-home"></i><span class="menu-title" data-i18n="">Data Siswa</span></a>
                </li> -->
                <!-- Jika ingin menggunakan sidebar sub menu -->
                <li class=" nav-item"><a href="#"><i class="feather icon-user"></i><span class="menu-title" data-i18n="">Data Master</span></a>
                    <ul class="menu-content">
                      <li class="nav-item"><a href="<?= base_url()?>admin/guru"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="">Data Guru</span></a>
                      </li>
                      <li class="nav-item"><a href="<?= base_url()?>admin/nilai"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="">Data Nilai</span></a>
                      </li>
                      <li class=" nav-item"><a href="#"><i class="fa fa-plus"></i><span class="menu-title" data-i18n="">Data Siswa</span></a>
                          <ul class="menu-content">
                            <li class="nav-item"><a href="<?= base_url()?>admin/siswa"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="">Data Siswa Aktif</span></a>
                            </li>
                            <li class="nav-item"><a href="<?= base_url()?>admin/siswa"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="">Data Siswa Alumni</span></a>
                            </li>
                          </ul>
                      </li>
                      <li class="nav-item"><a href="<?= base_url()?>admin/kelas"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="">Data Kelas</span></a>
                      </li>
                    </ul>
                </li>

            </ul>

        </div>
