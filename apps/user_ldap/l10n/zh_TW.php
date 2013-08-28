<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "清除映射失敗",
"Failed to delete the server configuration" => "刪除伺服器設定時失敗",
"The configuration is valid and the connection could be established!" => "設定有效且連線可建立",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "設定有效但連線無法建立，請檢查伺服器設定與認證資料。",
"The configuration is invalid. Please look in the ownCloud log for further details." => "設定無效，更多細節請參閱 ownCloud 的記錄檔。",
"Deletion failed" => "移除失敗",
"Take over settings from recent server configuration?" => "要使用最近一次的伺服器設定嗎？",
"Keep settings?" => "維持設定嗎？",
"Cannot add server configuration" => "無法新增伺服器設定",
"mappings cleared" => "映射已清除",
"Success" => "成功",
"Error" => "錯誤",
"Connection test succeeded" => "連線測試成功",
"Connection test failed" => "連線測試失敗",
"Do you really want to delete the current Server Configuration?" => "您真的要刪除現在的伺服器設定嗎？",
"Confirm Deletion" => "確認刪除",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>警告：</b>沒有安裝 PHP LDAP 模組，後端系統將無法運作，請要求您的系統管理員安裝模組。",
"Server configuration" => "伺服器設定",
"Add Server Configuration" => "新增伺服器設定",
"Host" => "主機",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "若您不需要 SSL 加密連線則不需輸入通訊協定，反之請輸入 ldaps://",
"Base DN" => "Base DN",
"One Base DN per line" => "一行一個 Base DN",
"You can specify Base DN for users and groups in the Advanced tab" => "您可以在進階標籤頁裡面指定使用者及群組的 Base DN",
"User DN" => "User DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "客戶端使用者的DN與特定字詞的連結需要完善，例如:uid=agent,dc=example,dc=com。若是匿名連接，則將DN與密碼欄位留白。",
"Password" => "密碼",
"For anonymous access, leave DN and Password empty." => "匿名連接時請將 DN 與密碼欄位留白",
"User Login Filter" => "User Login Filter",
"User List Filter" => "User List Filter",
"Group Filter" => "Group Filter",
"Connection Settings" => "連線設定",
"Configuration Active" => "設定使用中",
"When unchecked, this configuration will be skipped." => "沒有被勾選時，此設定會被略過。",
"Port" => "連接埠",
"Backup (Replica) Host" => "備用主機",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "可以選擇性設定備用主機，必須是 LDAP/AD 中央伺服器的複本。",
"Backup (Replica) Port" => "備用（複本）連接埠",
"Disable Main Server" => "停用主伺服器",
"Use TLS" => "使用 TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "不要同時與 LDAPS 使用，會有問題。",
"Case insensitve LDAP server (Windows)" => "不區分大小寫的 LDAP 伺服器 (Windows)",
"Turn off SSL certificate validation." => "關閉 SSL 憑證檢查",
"Cache Time-To-Live" => "快取的存活時間",
"in seconds. A change empties the cache." => "以秒為單位。變更後會清空快取。",
"Directory Settings" => "目錄設定",
"User Display Name Field" => "使用者顯示名稱欄位",
"Base User Tree" => "Base User Tree",
"One User Base DN per line" => "一行一個使用者 Base DN",
"User Search Attributes" => "User Search Attributes",
"Optional; one attribute per line" => "非必要，一行一項屬性",
"Group Display Name Field" => "群組顯示名稱欄位",
"Base Group Tree" => "Base Group Tree",
"One Group Base DN per line" => "一行一個 Group Base DN",
"Group Search Attributes" => "Group Search Attributes",
"Group-Member association" => "Group-Member association",
"Special Attributes" => "特殊屬性",
"Quota Field" => "配額欄位",
"Quota Default" => "預設配額",
"in bytes" => "以位元組為單位",
"Email Field" => "電郵欄位",
"User Home Folder Naming Rule" => "使用者家目錄的命名規則",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "使用者名稱請留白(預設)。若不留白請指定一個LDAP/AD屬性。",
"Internal Username" => "內部使用者名稱",
"Test Configuration" => "測試此設定",
"Help" => "說明"
);
$PLURAL_FORMS = "nplurals=1; plural=0;";
