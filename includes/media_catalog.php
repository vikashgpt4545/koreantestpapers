<?php
// Centralized Google Drive Media Catalog for KoreanTestPapers.in
// Google Drive Master Folder ID: 1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv

function get_google_drive_download_url($file_id, $filename = '') {
    $master_folder_id = "1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv";
    if (empty($file_id) || $file_id === $master_folder_id) {
        return "https://drive.google.com/drive/folders/" . $master_folder_id;
    }
    return "https://drive.google.com/uc?export=download&id=" . $file_id;
}

function get_master_pdf_catalog() {
    return [
        // 102nd TOPIK (2025)
        [
            'session' => '102nd TOPIK',
            'year' => '2025',
            'level' => 'TOPIK I',
            'type' => 'Listening Test Paper',
            'file_name' => '102nd-TOPIK-I-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '102nd TOPIK',
            'year' => '2025',
            'level' => 'TOPIK I',
            'type' => 'Listening Answers',
            'file_name' => '102nd-TOPIK-I-Listening-Answers.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '102nd TOPIK',
            'year' => '2025',
            'level' => 'TOPIK I',
            'type' => 'Listening Transcript',
            'file_name' => '102nd-TOPIK-I-Listening-Transcript.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '102nd TOPIK',
            'year' => '2025',
            'level' => 'TOPIK I',
            'type' => 'Reading Test Paper',
            'file_name' => '102nd-TOPIK-I-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '102nd TOPIK',
            'year' => '2025',
            'level' => 'TOPIK I',
            'type' => 'Reading Answers',
            'file_name' => '102nd-TOPIK-I-Reading-Answers.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '102nd TOPIK',
            'year' => '2025',
            'level' => 'TOPIK I',
            'type' => 'Listening Audio MP3',
            'file_name' => '102-TOPIK-I-Listening-Audio-File.mp3',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],

        // 96th TOPIK (2024)
        [
            'session' => '96th TOPIK',
            'year' => '2024',
            'level' => 'TOPIK I',
            'type' => 'Listening Test Paper',
            'file_name' => '96th-TOPIK-I-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '96th TOPIK',
            'year' => '2024',
            'level' => 'TOPIK I',
            'type' => 'Reading Test Paper',
            'file_name' => '96th-TOPIK-I-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '96th TOPIK',
            'year' => '2024',
            'level' => 'TOPIK I',
            'type' => 'Answers PDF',
            'file_name' => '96th-TOPIK-I-Answers.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '96th TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Listening Test Paper',
            'file_name' => '96th-TOPIK-II-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '96th TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Reading Test Paper',
            'file_name' => '96th-TOPIK-II-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '96th TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Writing Test Paper',
            'file_name' => '96th-TOPIK-II-Writing-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '96th TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Answers PDF',
            'file_name' => '96th-TOPIK-II-Answers.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '96th TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Listening Audio MP3',
            'file_name' => '96th TOPIK II Listening Audio.mp3',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],

        // 91st TOPIK (2024)
        [
            'session' => '91st TOPIK',
            'year' => '2024',
            'level' => 'TOPIK I',
            'type' => 'Listening Test Paper',
            'file_name' => '91st-TOPIK-I-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '91st TOPIK',
            'year' => '2024',
            'level' => 'TOPIK I',
            'type' => 'Reading Test Paper',
            'file_name' => '91st-TOPIK-I-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '91st TOPIK',
            'year' => '2024',
            'level' => 'TOPIK I',
            'type' => 'Listening Answers',
            'file_name' => '91st-TOPIK-I-Listening-Answers.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '91st TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Listening Test Paper',
            'file_name' => '91st-TOPIK-II-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '91st TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Reading Test Paper',
            'file_name' => '91st-TOPIK-II-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '91st TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Writing Test Paper',
            'file_name' => '91st-TOPIK-II-Writing-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '91st TOPIK',
            'year' => '2024',
            'level' => 'TOPIK II',
            'type' => 'Listening Audio MP3',
            'file_name' => '91-TOPIK-II-Listening-Audio-File.mp3',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],

        // 83rd TOPIK (2022)
        [
            'session' => '83rd TOPIK',
            'year' => '2022',
            'level' => 'TOPIK I',
            'type' => 'Listening Test Paper',
            'file_name' => '83rd-TOPIK-I-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '83rd TOPIK',
            'year' => '2022',
            'level' => 'TOPIK I',
            'type' => 'Reading Test Paper',
            'file_name' => '83rd-TOPIK-I-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '83rd TOPIK',
            'year' => '2022',
            'level' => 'TOPIK II',
            'type' => 'Listening Test Paper',
            'file_name' => '83rd-TOPIK-II-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '83rd TOPIK',
            'year' => '2022',
            'level' => 'TOPIK II',
            'type' => 'Reading Test Paper',
            'file_name' => '83rd-TOPIK-II-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '83rd TOPIK',
            'year' => '2022',
            'level' => 'TOPIK II',
            'type' => 'Writing Test Paper',
            'file_name' => '83rd-TOPIK-II-Writing-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],

        // 64th TOPIK (2019)
        [
            'session' => '64th TOPIK',
            'year' => '2019',
            'level' => 'TOPIK I',
            'type' => 'Reading Test Paper',
            'file_name' => '64th-TOPIK-I-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '64th TOPIK',
            'year' => '2019',
            'level' => 'TOPIK I',
            'type' => 'Listening Test Paper',
            'file_name' => '64th-TOPIK-I-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '64th TOPIK',
            'year' => '2019',
            'level' => 'TOPIK II',
            'type' => 'Listening Test Paper',
            'file_name' => '64th-TOPIK-II-Listening-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '64th TOPIK',
            'year' => '2019',
            'level' => 'TOPIK II',
            'type' => 'Reading Test Paper',
            'file_name' => '64th-TOPIK-II-Reading-Test-Paper.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],

        // 60th, 52nd, 47th, 41st, 37th, 36th, 35th, 33rd, 32nd, 31st, 30th archives
        [
            'session' => '60th TOPIK',
            'year' => '2018',
            'level' => 'TOPIK I & II',
            'type' => 'Test Papers & Answers',
            'file_name' => '60th TOPIK I Test Papers.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '52nd TOPIK',
            'year' => '2017',
            'level' => 'TOPIK I & II',
            'type' => 'Test Papers & Answers',
            'file_name' => '52nd TOPIK I Papers (1).pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '47th TOPIK',
            'year' => '2016',
            'level' => 'TOPIK I & II',
            'type' => 'Test Papers & Answers',
            'file_name' => '47th TOPIK I Papers.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '35th TOPIK',
            'year' => '2014',
            'level' => 'TOPIK I & II',
            'type' => 'Test Papers & Answers',
            'file_name' => '35th-TOPIK-I-Papers.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ],
        [
            'session' => '30th TOPIK',
            'year' => '2013',
            'level' => 'TOPIK Archives',
            'type' => 'Beginner / Intermediate / Advanced',
            'file_name' => '30th TOPIK Papers Beginner.pdf',
            'drive_id' => '1opEW5O5mvYt2lcFP169Sizil7z0z6Qsv'
        ]
    ];
}
?>
