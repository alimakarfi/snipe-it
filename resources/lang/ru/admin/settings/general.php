<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Домен Active Directory',
    'ad_domain_help'			=> 'Обычно, то же, что и ваш домен, но не всегда.',
    'ad_append_domain_label'    => 'Добавить доменное имя',
    'ad_append_domain'          => 'Добавить имя домена к имени пользователя',
    'ad_append_domain_help'     => 'Пользователю не нужно будет вводить "username@domain.local", можно просто ввести "username".',
    'admin_cc_email'            => 'Скрытая копия',
    'admin_cc_email_help'       => 'Если вы хотите отправлять копии писем, что приходят пользователям при выдаче/возврате, на какой-то дополнительный адрес электронной почты, то введите его здесь. В противном случае оставьте это поле пустым.',
    'is_ad'				        => 'У вас сервер Active Directory',
    'alerts'                	=> 'Уведомления',
    'alert_title'               => 'Обновить настройки уведомлений',
    'alert_email'				=> 'Посылать уведомления на',
    'alert_email_help'    => 'Адреса электронной почты или списки рассылки которые вы хотите отправить, должны быть разделены запятыми',
    'alerts_enabled'			=> 'Уведомления включены',
    'alert_interval'			=> 'Предупреждение об истечении срока (в днях)',
    'alert_inv_threshold'		=> 'Порог оповещения о запасах',
    'allow_user_skin'           => 'Разрешить пользовтельские темы офрмления',
    'allow_user_skin_help_text' => 'Включение позволит пользователю изменять тему веб-интерфейса',
    'asset_ids'					=> 'ID актива',
    'audit_interval'            => 'Интервал аудита',
    'audit_interval_help'       => 'Если требуется регулярное проведение аудита, вы можете обозначить необходимый вам интервал в месяцах. При обновлении этого значения, будут обновлены все "даты следующего аудита" у активов с приближающейся датой аудита.',
    'audit_warning_days'        => 'Предупреждающий порог предупреждения',
    'audit_warning_days_help'   => 'За сколько дней мы должны предупредить вас, когда активы подлежат аудиту?',
    'auto_increment_assets'		=> 'Генерировать метки активов авто увеличением',
    'auto_increment_prefix'		=> 'Префикс ( не обязательно )',
    'auto_incrementing_help'    => 'Сначала включите автоинкремент тегов активов, чтобы установить это',
    'backups'					=> 'Резервные копии',
    'backups_help'              => 'Создавать, загружать и восстанавливать резервные копии ',
    'backups_restoring'         => 'Восстановление из резервной копии',
    'backups_upload'            => 'Загрузить резервную копию',
    'backups_path'              => 'Резервные копии хранятся на сервере в <code>:path</code>',
    'backups_restore_warning'   => 'Используйте кнопку восстановления <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> для восстановления из предыдущей резервной копии. (В настоящее время он не работает с хранилищем файлов S3 или Docker.)<br><br>Ваша <strong>база данных :app_name и все загруженные файлы будут полностью заменены</strong> на те, что находится в файле резервной копии.  ',
    'backups_logged_out'         => 'Все пользователи, включая текущего, будут разлогинены после завершения восстановления.',
    'backups_large'             => 'Очень большой бекап может не уложиться в стандартные значения ожидания и может потребоваться запуск восстановления через командную строку.',
    'barcode_settings'			=> 'Настройки штрихкода',
    'confirm_purge'			    => 'Подтвердить удаление',
    'confirm_purge_help'		=> 'Введите "DELETE" в поле ниже для окончательного удаления ваших удаленных записей. Это действие не может быть отменено и ПОЛНОСТЬЮ очистит все удаленные записи. (Предварительно сделайте бекап, просто на всякий случай.)',
    'custom_css'				=> 'Пользовательское CSS',
    'custom_css_help'			=> 'Введите любое пользовательское CSS, которые вы хотите использовать. Не указывайте &lt;style&gt;&lt;/style&gt; теги.',
    'custom_forgot_pass_url'	=> 'Пользовательский URL для сброса пароля',
    'custom_forgot_pass_url_help'	=> 'Этим заменяется встроенный URL забытого пароля на экране входа в систему, что полезно, чтобы направлять пользователей на внутренние или размещенные в LDAP функции сброса пароля. Это позволит эффективно отключить локальный функционал восстановления забытого пользовательского пароля.',
    'dashboard_message'			=> 'Сообщение панели управления',
    'dashboard_message_help'	=> 'Этот текст будет отображаться на панели управления у всех кто обладает правом просмотра панели управления.',
    'default_currency'  		=> 'Валюта по-умолчанию',
    'default_eula_text'			=> 'Пользовательское соглашение по умолчанию',
    'default_language'			=> 'Язык по умолчанию',
    'default_eula_help_text'	=> 'Вы так же можете привязать собственные пользовательские соглашения к определенным категориям активов.',
    'display_asset_name'        => 'Отображаемое имя актива',
    'display_checkout_date'     => 'Отображать дату выдачи',
    'display_eol'               => 'Отображать дату истечения срока гарантии в таблице',
    'display_qr'                => 'Отображать QR коды',
    'display_alt_barcode'		=> 'Показывать штрих-коды',
    'email_logo'                => 'Логотип E-Mail',
    'barcode_type'				=> 'Тип 2D штрихкода',
    'alt_barcode_type'			=> 'Тип линейного штрихкода',
    'email_logo_size'       => 'В почте лучше всего выглядят квадратные логотипы. ',
    'enabled'                   => 'Включено',
    'eula_settings'				=> 'Настройки лицензионного соглашения',
    'eula_markdown'				=> 'Это EULA поддерживает <a href="https://help.github.com/articles/github-flavored-markdown/">форматирование Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Разрешенные типы файлов: ico, png и gif. Другие форматы изображений могут не отображаться во всех браузерах.',
    'favicon_size'          => 'Favicon\'ы быть квадратными размером 16х16 пикселей.',
    'footer_text'               => 'Дополнительный текст нижнего колонтитула ',
    'footer_text_help'          => 'Этот текст будет отображаться в правой части нижнего колонтитула. Разрешается использовать ссылки следующего вида <a href="https://help.github.com/articles/github-flavored-markdown/">Github ароматизированные уценок</a>. Использование прочей HTML разметки, переводов строк, изображений - может привести к непредсказуемым результатам.',
    'general_settings'			=> 'Общие настройки',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'EULA по умолчанию и прочее',
    'generate_backup'			=> 'Создать резервную копию',
    'header_color'              => 'Цвет заголовка',
    'info'                      => 'Эти настройки позволяют персонализировать некоторые аспекты вашей установки.',
    'label_logo'                => 'Логотип этикетки',
    'label_logo_size'           => 'Для маркировки активов лучше всего подойдут квадратные логотипы. Они будт отображаться в правом верхнем углу актива. ',
    'laravel'                   => 'Версия Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Группа прав доступа по умолчанию',
    'ldap_default_group_info'   => 'Выберите группу для привязки к пользователю, помните пользователь получает права доступа группы к которой он привязан.',
    'no_default_group'          => 'Нет группы по умолчанию',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'Клиентский TLS-ключ LDAP',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP активно',
    'ldap_integration'          => 'Интеграция LDAP',
    'ldap_settings'             => 'Настройка LDAP',
    'ldap_client_tls_cert_help' => 'Клиентский TLS сертификат и Ключ для LDAP-соединений обычно принято использовать только в конфигурациях Google Workspace с параметром “Secure LDAP”. Оба параметра обязательны.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'Поле LDAP Location должно использоваться, если <strong>OU не указано в Base Bind DN.</strong> Оставьте поле пустым, если нужно использовать поиск по OU.',
    'ldap_login_test_help'      => 'Введите действительное имя пользователя и пароль LDAP из базового DN, указанного выше, чтобы проверить, правильно ли настроен логин LDAP. СНАЧАЛА ВЫ ДОЛЖНЫ СОХРАНИТЬ ВАШИ ОБНОВЛЕННЫЕ НАСТРОЙКИ LDAP.',
    'ldap_login_sync_help'      => 'Этим производится проверка правильности синхронизации LDAP. Если тест подлинности LDAP не пройдёт, пользователи так и не смогут войти в систему. СНАЧАЛА ВЫ ДОЛЖНЫ СОХРАНИТЬ ВАШИ ОБНОВЛЕННЫЕ НАСТРОЙКИ LDAP.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Сервер LDAP',
    'ldap_server_help'          => 'Должен начинаться с ldap:// (для незашифрованных или TLS соединений) или ldaps:// (SSL)',
    'ldap_server_cert'			=> 'Подтверждение SSL сертификата LDAP',
    'ldap_server_cert_ignore'	=> 'Разрешить невалидный SSL сертификат',
    'ldap_server_cert_help'		=> 'Выберите галочку если вы используете самоподписанный SSL сертификат и хотите принять невалидный SSL сертификат.',
    'ldap_tls'                  => 'Использовать TLS',
    'ldap_tls_help'             => 'Отметьте, только если у вас запущен STARTTLS на вашем LDAP сервере. ',
    'ldap_uname'                => 'Имя пользователя LDAP Bind',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP номер телефона',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'Страна LDAP',
    'ldap_pword'                => 'Пароль LDAP Bind',
    'ldap_basedn'               => 'Основной Bind DN',
    'ldap_filter'               => 'Фильтр LDAP',
    'ldap_pw_sync'              => 'LDAP синхронизация паролей',
    'ldap_pw_sync_help'         => 'Снимите галку, если вы не хотите синхронизировать LDAP пароли с локальными. Отключение этого означает, что ваши пользователи не смогут зайти в систему, если ваш LDAP сервер станет недоступным.',
    'ldap_username_field'       => 'Поле имени пользователя',
    'ldap_lname_field'          => 'Фамилия',
    'ldap_fname_field'          => 'LDAP Имя',
    'ldap_auth_filter_query'    => 'Запрос аутентификации LDAP',
    'ldap_version'              => 'Версия LDAP',
    'ldap_active_flag'          => 'Активный флаг LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Номер сотрудника LDAP',
    'ldap_email'                => 'Email LDAP',
    'ldap_test'                 => 'Тест LDAP',
    'ldap_test_sync'            => 'Тест синхронизации LDAP',
    'license'                   => 'Лицензия на ПО',
    'load_remote_text'          => 'Внешние скрипты',
    'load_remote_help_text'		=> 'Данная установка Snipe-IT может загружать внешние скрипты.',
    'login'                     => 'Попытки входа',
    'login_attempt'             => 'Попытка входа',
    'login_ip'                  => 'IP-адрес',
    'login_success'             => 'Успешно?',
    'login_user_agent'          => 'Браузер пользователя',
    'login_help'                => 'Список попыток входа',
    'login_note'                => 'Комментарий для экрана логина',
    'login_note_help'           => 'Опционально выводит несколько предложений на экране логина. Например, чтобы помочь людям, которые нашли потерянное или украденное устройство. Здесь можно использовать <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'login_remote_user_text'    => 'Параметры входа удаленного пользователя',
    'login_remote_user_enabled_text' => 'Включение входа через использование Remote User Header',
    'login_remote_user_enabled_help' => 'Эта опция дает возможность аутентификации с использванием заголовка REMOTE_USER согласно спецификации "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Отключить прочие механизмы аутентификации',
    'login_common_disabled_help' => 'Этот параметр отключает другие механизмы аутентификации. Просто включите эту опцию, если вы уверены, что ваш  REMOTE_USER логин уже работает.',
    'login_remote_user_custom_logout_url_text' => 'Пользовательский URL выхода',
    'login_remote_user_custom_logout_url_help' => 'Если здесь будет указан URL-адрес, пользователи будут перенаправлены туда после выхода из Snipe-IT. Это полезно для правильного закрытия пользовательской сессии вашего поставщика аутентификации.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Логотип',
    'logo_print_assets'         => 'Используется при печати',
    'logo_print_assets_help'    => 'Использование брендинга в распечатке списка активов ',
    'full_multiple_companies_support_help_text' => 'Ограничить доступ пользователям (включая админов) только активами их компаний.',
    'full_multiple_companies_support_text' => 'Полная поддержка нескольких компаний',
    'show_in_model_list'   => 'Показать в списках (дропдаунах) модели',
    'optional'					=> 'не обязательно',
    'per_page'                  => 'Результатов на страницу',
    'php'                       => 'Версия PHP',
    'php_info'                  => 'PHP информация',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Для отображения QR кодов необходимо установить модуль php-gd.',
    'php_gd_warning'            => 'Библиотеки PHP Image Processing и GD plugin не установлены.',
    'pwd_secure_complexity'     => 'Сложность пароля',
    'pwd_secure_complexity_help' => 'Выберете необходимые вам правила сложности паролей.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Пароль должен отличаться от имени, фамилии, адреса электронной почты и имени пользователя',
    'pwd_secure_complexity_letters' => 'Требуется хотя бы одна буква',
    'pwd_secure_complexity_numbers' => 'Требуется хотя бы одно число',
    'pwd_secure_complexity_symbols' => 'Требовать хотя бы один символ',
    'pwd_secure_complexity_case_diff' => 'Требуется хотя бы одна заглавная буква и одна строчная',
    'pwd_secure_min'            => 'Минимальное количество символов',
    'pwd_secure_min_help'       => 'Минимально разрешенное значение - 8',
    'pwd_secure_uncommon'       => 'Запретить простые пароли',
    'pwd_secure_uncommon_help'  => 'Запретит пользователям использовать пароли входящие в 10 000 самых популярных.',
    'qr_help'                   => 'Включить QR коды',
    'qr_text'                   => 'Текст QR кода',
    'saml'                      => 'SAML',
    'saml_title'                => 'Обновление настроек SAML',
    'saml_help'                 => 'Настройки SAML',
    'saml_enabled'              => 'SAML включён',
    'saml_integration'          => 'Интеграция SAML',
    'saml_sp_entityid'          => 'ID записи',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Открытая часть Сертификата',
    'saml_sp_metadata_url'      => 'URL Метаданных',
    'saml_idp_metadata'         => 'Метаданные SAML IdP',
    'saml_idp_metadata_help'    => 'Метаданные IdP можно указать с помощью URL или XML-файла.',
    'saml_attr_mapping_username' => 'Привязка Атрибута - Имя Пользователя',
    'saml_attr_mapping_username_help' => 'NameID будет использоваться, если сопоставление атрибутов указано как unspecified или указано неверно.',
    'saml_forcelogin_label'     => 'Приоритет входа SAML',
    'saml_forcelogin'           => 'Сделать SAML-авторизацию входом по умолчанию',
    'saml_forcelogin_help'      => 'Вы можете использовать \'/login?nosaml\' для перехода на обычную страницу входа.',
    'saml_slo_label'            => 'Единый выход SAML',
    'saml_slo'                  => 'Отправить запрос на выход в IdP при выходе',
    'saml_slo_help'             => 'Это приведет к тому, что пользователь будет сначала перенаправлен на IdP при выходе. Оставьте неотмеченным, если IdP не поддерживает SAML SLO, инициированный SP.',
    'saml_custom_settings'      => 'Дополнительные параметры SAML',
    'saml_custom_settings_help' => 'Вы можете указать дополнительные параметры библиотеке onelogin/php-saml. Используйте на свой страх и риск.',
    'saml_download'             => 'Скачать Метаданные',
    'setting'                   => 'Настройка',
    'settings'                  => 'Настройки',
    'show_alerts_in_menu'       => 'Показать оповещения в верхнем меню',
    'show_archived_in_list'     => 'Архивные активы',
    'show_archived_in_list_text'     => 'Отображать активы из архива в списке «все активы»',
    'show_assigned_assets'      => 'Показать активы, назначенные активам',
    'show_assigned_assets_help' => 'Выводить активы, назначенные другим активам в "Вид пользователя -> Активы", "Вид пользователя -> Информация-> Печать всех назначенных" и в "Учетная запись -> Просмотр назначенных активов".',
    'show_images_in_email'     => 'Показать изображения в письмах',
    'show_images_in_email_help'   => 'Снимите этот флажок, если ваша установка Snipe-IT находится за VPN или в закрытой сети в случае, если в E-mail-ах, которые просматриваются пользователями за пределами указанной сети не отбражаются/не загружаются изображения из данной установки Snipe-IT.',
    'site_name'                 => 'Название сайта',
    'integrations'               => 'Интеграции',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Протестировать перед сохранением',
    'webhook_title'               => 'Обновить настройки Webhook',
    'webhook_help'                => 'Настройки интеграций',
    'webhook_botname'             => 'Имя бота :app',
    'webhook_channel'             => ':app канал',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Настройки',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Как только вы сохраните :app информацию, появится тестовая кнопка.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Версия Snipe-IT',
    'support_footer'            => 'Ссылки на поддержу в нижнем колонтитуле ',
    'support_footer_help'       => 'Отображать или не отображать ссылку на руководство пользователя и поддержку Snipe-IT',
    'version_footer'            => 'Версия в нижнем колонтитуле ',
    'version_footer_help'       => 'Отображать или не отображать версию и номер сборки Snipe-IT.',
    'system'                    => 'Информация о системе',
    'update'                    => 'Обновить настройки',
    'value'                     => 'Значение',
    'brand'                     => 'Фирменный стиль',
    'brand_keywords'            => 'нижняя часть страницы, логотип, print, тема, оболочка, верхняя часть страницы, цветовая палитра, цвет, css',
    'brand_help'                => 'Логотип, Имя сайта',
    'web_brand'                 => 'Тип Web-Брендинга',
    'about_settings_title'      => 'О настройках',
    'about_settings_text'       => 'Эти настройки позволяют персонализировать некоторые аспекты вашей установки.',
    'labels_per_page'           => 'Этикеток на странице',
    'label_dimensions'          => 'Размеры наклеек (в дюймах)',
    'next_auto_tag_base'        => 'Следующий автоинкремент',
    'page_padding'              => 'Поля страницы (в дюймах)',
    'privacy_policy_link'       => 'Ссылка на политику конфиденциальности',
    'privacy_policy'            => 'Политика конфидициальности',
    'privacy_policy_link_help'  => 'Добавленный здесь URL-адрес, будет являться ссылкой на политику конфиденциальности и будет отображаться в футере приложения, а также будет добавлен в e-mail сообщения, которые посылает система, в соответствии с GDPR. ',
    'purge'                     => 'Очистка удалённых записей',
    'purge_deleted'             => 'Очистить удаленное',
    'labels_display_bgutter'    => 'Метка внизу страницы',
    'labels_display_sgutter'    => 'Метка сбоку страницы',
    'labels_fontsize'           => 'Размер шрифта метки',
    'labels_pagewidth'          => 'Ширина ярлыка',
    'labels_pageheight'         => 'Высота ярлыка',
    'label_gutters'        => 'Интервал ярлыков (дюймы)',
    'page_dimensions'        => 'Размер страницы (дюймы)',
    'label_fields'          => 'Видимые поля ярлыков',
    'inches'        => 'дюймы',
    'width_w'        => 'ширина',
    'height_h'        => 'высота',
    'show_url_in_emails'                => 'Ссылка на Snipe-IT в электронных письмах',
    'show_url_in_emails_help_text'      => 'Снимите этот флажок, если вы не хотите ссылаться на свою установку Snipe-IT в нижних колонтитулах электронной почты. Полезно, если большинство ваших пользователей никогда не заходят в систему.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Максимальная высота иконки',
    'thumbnail_max_h_help'   => 'Максимальная высота в пикселях для отображения в списке. Минимум 25, максимум 500.',
    'two_factor'        => 'Двухфакторная аутентификация',
    'two_factor_secret'        => 'Двухфакторный код',
    'two_factor_enrollment'        => 'Двухфакторная регистрация',
    'two_factor_enabled_text'        => 'Включить двухфакторную аутентификацию',
    'two_factor_reset'        => 'Сбросить двухфакторный секрет',
    'two_factor_reset_help'        => 'Это заставит пользователя снова регистрировать свое устройство с помощью Google Authenticator. Это может быть полезно, если их зарегистрированное устройство потеряно или украдено. ',
    'two_factor_reset_success'          => 'Двухфакторное устройство успешно сброшено',
    'two_factor_reset_error'          => 'Ошибка сброса двухфакторного устройства',
    'two_factor_enabled_warning'        => 'Если включить двухфакторный режим (если он в данный момент не включен) вы сразу же будете вынуждены проходить аутентификацию на устройстве, зарегистрированном в Google Auth. У вас будет возможность зарегистрировать свое устройство, если оно не зарегистрировано.',
    'two_factor_enabled_help'        => 'Это включит двухфакторную проверку подлинности с помощью Google Authenticator.',
    'two_factor_optional'        => 'Выборочно (пользователи могут включить или отключить если разрешено)',
    'two_factor_required'        => 'Требуется для всех пользователей',
    'two_factor_disabled'        => 'Выключен',
    'two_factor_enter_code'	=> 'Введите Двухфакторный код',
    'two_factor_config_complete'	=> 'Подтвердить код',
    'two_factor_enabled_edit_not_allowed' => 'Ваш администратор не позволяет изменять этот параметр.',
    'two_factor_enrollment_text'	=> "Требуется двухфакторная аутентификация, однако ваше устройство еще не зарегистрировано. Откройте приложение Google Authenticator и отсканируйте QR-код ниже, чтобы зарегистрировать свое устройство. После того, как вы зарегистрируете свое устройство, введите приведенный ниже код",
    'require_accept_signature'      => 'Требуется подпись',
    'require_accept_signature_help_text'      => 'Включение этой функции потребует от пользователей физического выхода из системы при принятии актива.',
    'left'        => 'слева',
    'right'        => 'справа',
    'top'        => 'сверху',
    'bottom'        => 'снизу',
    'vertical'        => 'вертикально',
    'horizontal'        => 'горизонтально',
    'unique_serial'                => 'Уникальные серийные номера',
    'unique_serial_help_text'                => 'Установка этого флажка включает ограничение по уникальности на серии активов',
    'zerofill_count'        => 'Длина инвентарного номера, включая заполнение нулями',
    'username_format_help'   => 'Этот параметр используется только в процессе импорта, если имя пользователя не предоставляется и мы должны сгенерировать его для Вас.',
    'oauth_title' => 'Настройки OAuth API',
    'oauth' => 'OAuth',
    'oauth_help' => 'Настройки Oauth Endpoint',
    'asset_tag_title' => 'Обновить Настройки Тега Актива',
    'barcode_title' => 'Обновить Настройки Штрих-кода',
    'barcodes' => 'Штрихкоды',
    'barcodes_help_overview' => ' Настройки штрих-кодов 1D &amp; 2D',
    'barcodes_help' => 'Эта операция попытается удалить штрих-коды. Обычно это нужно делать только в том случае, если вы изменили настройки штрих-кода, или изменился URL-адрес вашего инстанса Snipe-IT. Штрих-коды будут перегенерированы при следующем запросе.',
    'barcodes_spinner' => 'Попытка удаления файлов...',
    'barcode_delete_cache' => 'Удалить кеш штрихкодов',
    'branding_title' => 'Обновить настройки брендирования',
    'general_title' => 'Обновить основные настройки',
    'mail_test' => 'Отправить тестовое сообщение',
    'mail_test_help' => 'Это отправит тестовое сообщение :replyto.',
    'filter_by_keyword' => 'Сортировать по ключевому слову',
    'security' => 'Безопасность',
    'security_title' => 'Обновить настройки безопасности',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Двухфакторная авторизация, ограничения паролей',
    'groups_keywords' => 'разрешения, группы разрешений, авторизация',
    'groups_help' => 'Группы прав доступа',
    'localization' => 'Локализация',
    'localization_title' => 'Обновить настройки локализации',
    'localization_keywords' => 'локализация, валюта, локальный, локаль, временная зона, интернационализация, язык, перевод',
    'localization_help' => 'Язык, формат даты',
    'notifications' => 'Уведомления',
    'notifications_help' => 'Настройки оповещений и аудита электронной почты',
    'asset_tags_help' => 'Инкременты и префиксы',
    'labels' => 'Этикетки',
    'labels_title' => 'Обновить настройки этикетки',
    'labels_help' => 'Настройки &amp; размеров этикетки',
    'purge' => 'Очистить',
    'purge_keywords' => 'удалить полностью',
    'purge_help' => 'Очистка удалённых записей',
    'ldap_extension_warning' => 'Похоже на вашем сервере не установлен или не включен модуль LDAP синхронизации. Вы можете сохранить ваши параметры, но вам потребуется установить\\включить модуль для PHP прежде выполнить синхронизацию с доменом.',
    'ldap_ad' => 'LDAP/Active Directory',
    'employee_number' => 'Номер сотрудника',
    'create_admin_user' => 'Создать пользователя ::',
    'create_admin_success' => 'Отлично! Администратор успешно добавлен!',
    'create_admin_redirect' => 'Нажмите тут, что бы авторизоваться в вашем приложении!',
    'setup_migrations' => 'Миграции базы данных ::',
    'setup_no_migrations' => 'Ничего мигрировать. Ваши таблицы базы данных уже настроены!',
    'setup_successful_migrations' => 'Ваши таблицы базы данных были созданы',
    'setup_migration_output' => 'Вывод миграции:',
    'setup_migration_create_user' => 'Далее: Создать пользователя',
    'ldap_settings_link' => 'Страница настроек LDAP',
    'slack_test' => 'Протестировать <i class="fab fa-slack"></i> интеграцию',
    'label2_enable'           => 'Новый движок этикеток',
    'label2_enable_help'      => 'Переключиться на новый движок этикеток. <b>Важно: вам нужно сохранить эти настройки перед изменением других настроек.</b>',
    'label2_template'         => 'Шаблон',
    'label2_template_help'    => 'Выберите шаблон для генерации этикеток',
    'label2_title'            => 'Заголовок',
    'label2_title_help'       => 'Заголовок выводится на этикетках, в которых включен его вывод',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => 'Тип штрих-кода 1D',
    'label2_1d_type_help'     => 'Формат для 1D штрих-кодов',
    'label2_2d_type'          => 'Тип 2D штрих-кода',
    'label2_2d_type_help'     => 'Формат 2D штрих-кодов',
    'label2_2d_target'        => 'Цель 2D штрих-кода',
    'label2_2d_target_help'   => 'URL для 2D штрих-кодов указывает адрес сайта с активом/объектом',
    'label2_fields'           => 'Определения полей',
    'label2_fields_help'      => 'Поля могут быть добавлены, удалены и переупорядочены в левой колонке. Для каждого поля можно добавлять, удалять и переупорядочивать несколько параметров меток и DataSource.',
    'help_asterisk_bold'    => 'Текст, введенный как <code>**текст**</code> будет отображаться как жирный',
    'help_blank_to_use'     => 'Оставьте пустым, чтобы использовать значение из <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Настройки входа через Google Workspace',
    'enable_google_login'  => 'Разрешить пользователям входить, используя Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
];
