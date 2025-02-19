<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DashNA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");

        * {
            box-sizing: border-box;
        }

        :root {
            --app-bg: #101827;
            --sidebar: rgba(21, 30, 47, 1);
            --sidebar-main-color: #fff;
            --table-border: #1a2131;
            --table-header: #1a2131;
            --app-content-main-color: #fff;
            --sidebar-link: #fff;
            --sidebar-active-link: #1d283c;
            --sidebar-hover-link: #1a2539;
            --action-color: #2869ff;
            --action-color-hover: #6291fd;
            --app-content-secondary-color: #1d283c;
            --filter-reset: #2c394f;
            --filter-shadow: rgba(16, 24, 39, 0.8) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }

        .light:root {
            --app-bg: #fff;
            --sidebar: #f3f6fd;
            --app-content-secondary-color: #f3f6fd;
            --app-content-main-color: #1f1c2e;
            --sidebar-link: #1f1c2e;
            --sidebar-hover-link: rgba(195, 207, 244, 0.5);
            --sidebar-active-link: rgba(195, 207, 244, 1);
            --sidebar-main-color: #1f1c2e;
            --filter-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }

        body {
            background-color: #101827;
            /* Diganti dari --app-bg */
            color: #fff;
            /* Diganti dari --app-content-main-color */
            overflow: hidden;
            font-family: "Poppins", sans-serif;

        }

        .app-container {
            border-radius: 4px;
            width: 100%;
            height: 100%;
            max-height: 100%;
            max-width: 1280px;
            display: flex;
            overflow: hidden;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            max-width: 2000px;
            margin: 0 auto;
        }

        .sidebar {
            flex-basis: 200px;
            max-width: 200px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            background-color: rgba(21, 30, 47, 1);
            /* Diganti dari --sidebar */
            color: #fff;
            /* Diganti dari --sidebar-main-color */
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px;
        }

        .sidebar-list {
            list-style-type: none;
            padding: 0;
        }

        .sidebar-list-item {
            position: relative;
            margin-bottom: 4px;
        }

        .sidebar-list-item a {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 10px 16px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            line-height: 24px;
        }

        .sidebar-list-item svg {
            margin-right: 8px;
        }

        .sidebar-list-item:hover {
            background-color: rgb(32, 24, 65);
        }

        .sidebar-list-item.active {
            background-color: rgb(32, 24, 65);
        }

        .sidebar-list-item.active:before {
            content: "";
            position: absolute;
            right: 0;
            background-color: rgb(32, 24, 65);
            height: 100%;
            width: 4px;
        }

        @media screen and (max-width: 1024px) {
            .sidebar {
                display: none;
            }
        }

        .mode-switch {
            background-color: transparent;
            border: none;
            padding: 0;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: auto;
            margin-right: 8px;
            cursor: pointer;
        }

        .mode-switch .moon {
            fill: #fff;
        }

        .mode-switch.active .moon {
            fill: none;
        }

        .account-info {
            display: flex;
            align-items: center;
            padding: 16px;
            margin-top: auto;
        }

        .account-info-picture {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
        }

        .account-info-picture img {
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .account-info-name {
            font-size: 14px;
            color: #fff;
            margin: 0 8px;
            overflow: hidden;
            max-width: 100%;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .account-info-more {
            color: #fff;
            padding: 0;
            border: none;
            background-color: transparent;
            margin-left: auto;
        }

        .app-icon {
            color: red;
        }

        .app-icon svg {
            width: 24px;
            height: 24px;
        }

        .app-content {
            padding: 16px;
            background-color: var(--app-bg);
            height: 100%;
            flex: 1;
            max-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .app-content-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 4px;
        }

        .app-content-headerText {
            color: var(--app-content-main-color);
            font-size: 24px;
            line-height: 32px;
            margin: 0;
        }

        .app-content-headerButton {
            background-color: var(--action-color);
            color: #fff;
            font-size: 14px;
            line-height: 24px;
            border: none;
            border-radius: 4px;
            height: 32px;
            padding: 0 16px;
            transition: 0.2s;
            cursor: pointer;
        }

        .app-content-headerButton:hover {
            background-color: var(--action-color-hover);
        }

        .app-content-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 4px;
        }

        .app-content-actions-wrapper {
            display: flex;
            align-items: center;
            margin-left: auto;
        }

        @media screen and (max-width: 520px) {
            .app-content-actions {
                flex-direction: column;
            }

            .app-content-actions .search-bar {
                max-width: 100%;
                order: 2;
            }

            .app-content-actions .app-content-actions-wrapper {
                padding-bottom: 16px;
                order: 1;
            }
        }

        .search-bar {
            background-color: var(--app-content-secondary-color);
            border: 1px solid var(--app-content-secondary-color);
            color: var(--app-content-main-color);
            font-size: 14px;
            line-height: 24px;
            border-radius: 4px;
            padding: 0px 10px 0px 32px;
            height: 32px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
            background-size: 16px;
            background-repeat: no-repeat;
            background-position: left 10px center;
            width: 100%;
            max-width: 320px;
            transition: 0.2s;
        }

        .light .search-bar {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%231f1c2e' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
        }

        .search-bar:placeholder {
            color: var(--app-content-main-color);
        }

        .search-bar:hover {
            border-color: var(--action-color-hover);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%236291fd' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
        }

        .search-bar:focus {
            outline: none;
            border-color: var(--action-color);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%232869ff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
        }

        .action-button {
            border-radius: 4px;
            height: 32px;
            background-color: var(--app-content-secondary-color);
            border: 1px solid var(--app-content-secondary-color);
            display: flex;
            align-items: center;
            color: var(--app-content-main-color);
            font-size: 14px;
            margin-left: 8px;
            cursor: pointer;
        }

        .action-button span {
            margin-right: 4px;
        }

        .action-button:hover {
            border-color: var(--action-color-hover);
        }

        .action-button:focus,
        .action-button.active {
            outline: none;
            color: var(--action-color);
            border-color: var(--action-color);
        }

        .filter-button-wrapper {
            position: relative;
        }

        .filter-menu {
            background-color: var(--app-content-secondary-color);
            position: absolute;
            top: calc(100% + 16px);
            right: -74px;
            border-radius: 4px;
            padding: 8px;
            width: 220px;
            z-index: 2;
            box-shadow: var(--filter-shadow);
            visibility: hidden;
            opacity: 0;
            transition: 0.2s;
        }

        .filter-menu:before {
            content: "";
            position: absolute;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 5px solid var(--app-content-secondary-color);
            bottom: 100%;
            left: 50%;
            transform: translatex(-50%);
        }

        .filter-menu.active {
            visibility: visible;
            opacity: 1;
            top: calc(100% + 8px);
        }

        .filter-menu label {
            display: block;
            font-size: 14px;
            color: var(--app-content-main-color);
            margin-bottom: 8px;
        }

        .filter-menu select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            padding: 8px 24px 8px 8px;
            background-position: right 4px center;
            border: 1px solid var(--app-content-main-color);
            border-radius: 4px;
            color: var(--app-content-main-color);
            font-size: 12px;
            background-color: transparent;
            margin-bottom: 16px;
            width: 100%;
        }

        .filter-menu select option {
            font-size: 14px;
        }

        .light .filter-menu select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%231f1c2e' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
        }

        .filter-menu select:hover {
            border-color: var(--action-color-hover);
        }

        .filter-menu select:focus,
        .filter-menu select.active {
            outline: none;
            color: var(--action-color);
            border-color: var(--action-color);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%232869ff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
        }

        .filter-menu-buttons {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .filter-button {
            border-radius: 2px;
            font-size: 12px;
            padding: 4px 8px;
            cursor: pointer;
            border: none;
            color: #fff;
        }

        .filter-button.apply {
            background-color: var(--action-color);
        }

        .filter-button.reset {
            background-color: var(--filter-reset);
        }

        .products-area-wrapper {
            width: 100%;
            max-height: 100%;
            overflow: auto;
            padding: 0 4px;
        }

        .tableView .products-header {
            display: flex;
            align-items: center;
            border-radius: 4px;
            background-color: var(--app-content-secondary-color);
            position: sticky;
            top: 0;
        }

        .tableView .products-row {
            display: flex;
            align-items: center;
            border-radius: 4px;
        }

        .tableView .products-row:hover {
            box-shadow: var(--filter-shadow);
            background-color: var(--app-content-secondary-color);
        }

        .tableView .products-row .cell-more-button {
            display: none;
        }

        .tableView .product-cell {
            flex: 1;
            padding: 8px 16px;
            color: var(--app-content-main-color);
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .tableView .product-cell img {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            margin-right: 6px;
        }

        @media screen and (max-width: 780px) {
            .tableView .product-cell {
                font-size: 12px;
            }

            .tableView .product-cell.image span {
                display: none;
            }

            .tableView .product-cell.image {
                flex: 0.2;
            }
        }

        @media screen and (max-width: 520px) {

            .tableView .product-cell.category,
            .tableView .product-cell.sales {
                display: none;
            }

            .tableView .product-cell.status-cell {
                flex: 0.4;
            }

            .tableView .product-cell.stock,
            .tableView .product-cell.price {
                flex: 0.2;
            }
        }

        @media screen and (max-width: 480px) {
            .tableView .product-cell.stock {
                display: none;
            }

            .tableView .product-cell.price {
                flex: 0.4;
            }
        }

        .tableView .sort-button {
            padding: 0;
            background-color: transparent;
            border: none;
            cursor: pointer;
            color: var(--app-content-main-color);
            margin-left: 4px;
            display: flex;
            align-items: center;
        }

        .tableView .sort-button:hover {
            color: var(--action-color);
        }

        .tableView .sort-button svg {
            width: 12px;
        }

        .tableView .cell-label {
            display: none;
        }

        .status {
            border-radius: 4px;
            display: flex;
            align-items: center;
            padding: 4px 8px;
            font-size: 12px;
        }

        .status:before {
            content: "";
            width: 4px;
            height: 4px;
            border-radius: 50%;
            margin-right: 4px;
        }

        .status.active {
            color: #2ba972;
            background-color: rgba(43, 169, 114, 0.2);
        }

        .status.active:before {
            background-color: #2ba972;
        }

        .status.disabled {
            color: #59719d;
            background-color: rgba(89, 113, 157, 0.2);
        }

        .status.disabled:before {
            background-color: #59719d;
        }

        .gridView {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -8px;
        }

        @media screen and (max-width: 520px) {
            .gridView {
                margin: 0;
            }
        }

        .gridView .products-header {
            display: none;
        }

        .gridView .products-row {
            margin: 8px;
            width: calc(25% - 16px);
            background-color: var(--app-content-secondary-color);
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.2s;
            position: relative;
        }

        .gridView .products-row:hover {
            transform: scale(1.01);
            box-shadow: var(--filter-shadow);
        }

        .gridView .products-row:hover .cell-more-button {
            display: flex;
        }

        @media screen and (max-width: 1024px) {
            .gridView .products-row {
                width: calc(33.3% - 16px);
            }
        }

        @media screen and (max-width: 820px) {
            .gridView .products-row {
                width: calc(50% - 16px);
            }
        }

        @media screen and (max-width: 520px) {
            .gridView .products-row {
                width: 100%;
                margin: 8px 0;
            }

            .gridView .products-row:hover {
                transform: none;
            }
        }

        .gridView .products-row .cell-more-button {
            border: none;
            padding: 0;
            border-radius: 4px;
            position: absolute;
            top: 16px;
            right: 16px;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background-color: rgba(16, 24, 39, 0.7);
            color: #fff;
            cursor: pointer;
            display: none;
        }

        .gridView .product-cell {
            color: var(--app-content-main-color);
            font-size: 14px;
            margin-bottom: 8px;
        }

        .gridView .product-cell:not(.image) {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .gridView .product-cell.image span {
            font-size: 18px;
            line-height: 24px;
        }

        .gridView .product-cell img {
            width: 100%;
            height: 140px;
            -o-object-fit: cover;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 16px;
        }

        .gridView .cell-label {
            opacity: 0.6;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* 2 kolom */
            gap: 16px;
            /* Jarak antara card */
            padding: 16px;
        }

        .card {
            background-color: var(--app-content-secondary-color);
            border-radius: 8px;
            padding: 16px;
            box-shadow: var(--filter-shadow);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--filter-shadow);
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 8px;
            color: var(--app-content-main-color);
        }

        .card p {
            font-size: 14px;
            color: var(--app-content-main-color);
            opacity: 0.8;
        }

        .card a {
            color: var(--action-color);
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
            margin-top: 8px;
        }

        .card a:hover {
            text-decoration: underline;
        }

        .card video {
            border-radius: 8px;
            margin-bottom: 12px;
            /* Menambahkan jarak antara video dan konten lainnya */
        }

        .card h3 {
            font-size: 18px;
            margin-bottom: 8px;
            color: var(--app-content-main-color);
        }

        .card p {
            font-size: 14px;
            color: var(--app-content-main-color);
            opacity: 0.8;
        }

        .card a {
            color: var(--action-color);
            text-decoration: none;
            font-size: 14px;
            display: inline-block;
            margin-top: 8px;
        }

        .card a:hover {
            text-decoration: underline;
        }

        /* Menambahkan scroll untuk app-content */
        .app-content {
            overflow-y: auto;
            /* Menambahkan scroll vertikal */
            max-height: calc(100vh - 50px);
            /* Mengatur tinggi maksimum agar area konten bisa di-scroll */
            padding: 20px;
        }

        /* Jika ingin mengatur scroll di sidebar, gunakan ini */
        .sidebar {
            overflow-y: auto;
            /* Menambahkan scroll vertikal di sidebar */
            height: 100vh;
            /* Menyesuaikan tinggi sidebar agar bisa di-scroll */
        }



        /* Optional: Styling untuk scrollbar */
        .app-content::-webkit-scrollbar {
            width: 8px;
        }

        .app-content::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            border-radius: 10px;
        }

        .app-content::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
    </style>

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="app-container">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="app-icon">
                    <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z" />
                    </svg>
                </div>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <a href="{{ route('dasboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                            <polyline points="9 22 9 12 15 12 15 22" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-list-item active">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-shopping-bag">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <path d="M16 10a4 4 0 0 1-8 0" />
                        </svg>
                        <span>Source Code</span>
                    </a>
                </li>

            </ul>
            <div class="account-info">
                <div class="account-info-picture">
                    <img src="https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60"
                        alt="Account">
                </div>
                <div class="account-info-name">Nadhim Alim</div>
                <button class="account-info-more">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-more-horizontal">
                        <circle cx="12" cy="12" r="1" />
                        <circle cx="19" cy="12" r="1" />
                        <circle cx="5" cy="12" r="1" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="app-content">
            <div class="app-content-header">
                <h1 class="app-content-headerText">Download Source Code</h1>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="app-content-headerButton" type="submit">Logout</button>
                </form>
            </div>
            <div class="app-content-actions">
                <h2>Welcome, {{ Auth::user()->name }}</h2>
                {{-- <h2>Welcome, {{ Auth::check() ? Auth::user()->name : 'Guest' }}</h2> --}}

            </div>
            {{-- bikin card tentang karya karya saya --}}
            <div class="grid-container">
                <!-- Card 1 -->
                <div class="card">
                    <a href="video1.mp4" download class="btn-download">Download Proyek</a>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <a href="video2.mp4" download class="btn-download">Download Proyek</a>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <a href="video3.mp4" download class="btn-download">Download Proyek</a>
                </div>

                <!-- Card 4 -->
                <div class="card">
                    <a href="video4.mp4" download class="btn-download">Download Proyek</a>
                </div>
                <div class="card">
                    <a href="video4.mp4" download class="btn-download">Download Proyek</a>
                </div>
                <div class="card">
                    <a href="video4.mp4" download class="btn-download">Download Proyek</a>
                </div>
                <div class="card">
                    <a href="video4.mp4" download class="btn-download">Download Proyek</a>
                </div>
                <div class="card">
                    <a href="video4.mp4" download class="btn-download">Download Proyek</a>
                </div>
                <div class="card">
                    <a href="video4.mp4" download class="btn-download">Download Proyek</a>
                </div>
                <div class="card">
                    <a href="video4.mp4" download class="btn-download">Download Proyek</a>
                </div>
                <div class="card">
                    <a href="video4.mp4" download class="btn-download">Download Proyek</a>
                </div>
            </div>
        </div>

    </div>
    <!-- partial -->
    <script src="./script.js"></script>

</body>

</html>
