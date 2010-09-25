<?php
$ItemFlags = array(
1 => "", // Soulbond
2 => "Conjured",
4 => "", // Right Click To Open
8 => "", // Wrapped
32 => "Уникальный", // Totem
64 => "", // Right Click To Use
256 => "", // Wrapper
512 => "", // Ribboned Wrapping Paper
1024 => "", // Gifts
2048 => "", // Quests Item
8192 => "Уникальный", // Charter
32768 => "Уникальный", // PvP Reward Item
524288 => "Уникально использующийся",
2097154 => "Conjured",
4194304 => "", // Throwable
8388608 => "" // Special Use
);
$SkillRankName = array(
75 => "Ученик",
150 => "Подмастерье",
225 => "Умелец",
300 => "Искусник",
375 => "Мастер",
450 => "Grand Мастер"
);
$equipslots = array(
0 => "Head",
1 => "Neck",
2 => "Shoulder",
3 => "Shirt",
4 => "Chest",
5 => "Belt",
6 => "Legs",
7 => "Feet",
8 => "Wrist",
9 => "Hands",
10 => "Finger",
11 => "Finger",
12 => "Trinket",
14 => "Cloak",
15 => "Main Hand",
16 => "Off Hand",
17 => "Ranged",
18 => "Tabard",
19 => "Bag 1",
20 => "Bag 2",
21 => "Bag 3",
22 => "Bag 4",
);
$inventorytype = array(
1 => "Голова",
2 => "Шея",
3 => "Плечи",
4 => "Рубашка",
5 => "Грудь",
6 => "Пояс",
7 => "Ноги",
8 => "Ступни",
9 => "Кисти рук",
10 => "Руки",
11 => "Палец",
12 => "Аксессуар",
13 => "Одноручное",
14 => "Правая рука", /* Shield */
15 => "Оружие дальнего боя",
16 => "Спина",
17 => "Двуручное",
18 => "Сумка",
19 => "Гербовая накидка",
20 => "Грудь", /* Robe */
21 => "Правая рука",
22 => "Правая рука", /* Weapon */
23 => "Левая рука", /* Orb, etc */
24 => "Боеприпасы",
25 => "Метательное",
26 => "Оружие дальнего боя",
27 => "Test",
28 => "Реликвия",
);
$reputation_rank = array(
0 => "Hated",
1 => "Hostile",
2 => "Unfriendly",
3 => "Neutral",
4 => "Friendly",
5 => "Honored",
6 => "Revered",
7 => "Exalted"
);
$stattype_description = array(
0 => "Мана",
1 => "Здоровье",
3 => "Ловкость",
4 => "Сила",
5 => "Интеллект",
6 => "Дух",
7 => "Выносливость",
12 => "При надевании: повышает уровень защиты на",
13 => "При надевании: повышает уровень уворачивания на",
14 => "При надевании: повышает уровень уворачивания на",
15 => "При надевании: повышает уровень блока щитом на",
16 => "При надевании: Improves melee hit rating rating by",
17 => "При надевании: Improves ranged hit rating rating by",
18 => "При надевании: Improves spell hit rating by",
19 => "При надевании: Improves melee critical strike rating by",
20 => "При надевании: Improves ranged critical strike rating by",
21 => "При надевании: повышает уровень вероятности критического удара на",
22 => "При надевании: Improves melee hit avoidance rating by",
23 => "При надевании: Improves ranged hit avoidance rating by",
24 => "При надевании: Improves spell hit avoidance rating by",
25 => "При надевании: Improves melee critical avoidance rating by",
26 => "При надевании: Improves ranged critical avoidance rating by",
27 => "При надевании: Improves spell critical avoidance rating by",
28 => "При надевании: Improves melee haste rating by",
29 => "При надевании: Improves ranged haste rating by",
30 => "При надевании: Improves spell haste rating by",
31 => "При надевании: повышает уровень меткости на",
32 => "При надевании: повышает уровень вероятности критического удара на",
33 => "При надевании: Improves hit avoidance rating by",
34 => "При надевании: Improves critical avoidance rating by",
35 => "При надевании: повышает уровень стойкости на",
36 => "При надевании: повышает частоту ударов на",
37 => "При надевании: увеличивает рейтинг мастерства на",
38 => "При надевании: Increases attack power by",
43 => "При надевании: Increases your mana regen by",
44 => "При надевании: Increases your armor penetration rating by",
45 => "При надевании: Increases spell power by",
);
$lang = array(
/* Armory */
"alliance" => "Альянс",
"error" => "Error",
"horde" => "Орда",
"name" => "Имя",
"none" => "Не состоит",
"realm" => "Игровой мир",
"realms" => "Игровой мир",
"report_to_gm" => "please report to GM",
// ordinal suffixes
"st" => "st",
"nd" => "nd",
"rd" => "rd",
"th" => "th",
/* Character */
"achievements" => "Achievements",
"arena" => "Arena",
"arena_points" => "Очки Арены",
"calendar" => "Calendar",
"char_link" => "Нажмите здесь для просмотра профиля персонажа.",
"char_name" => "Имя Персонажа",
"char_sheet" => "Character Sheet",
"class" => "Класс",
"energy" => "Энергия",
"faction" => "Фракция",
"guild_link" => "Clicking on this tab will take you to the Guilds section",
"health" => "Здоровье",
"honorable_kills" => "Всего почетных убийств",
"honor_points" => "Очки чести",
"level" => "Уровень",
"mana" => "Мана",
"more_arena_teams" => "More Arena Teams",
"no_arena_team" => "No Arena Team",
"personal_rating" => "Рейтинг персонажа",
"primary_prof" => "Основные профессии",
"profile" => "Профиль",
"race" => "Раса",
"rage" => "Ярость",
"reputation" => "Reputation",
"resistances" => "Сопротивляемость магии",
"runic" => "Runic",
"skills" => "Skills",
"talents" => "Talents",
"talent_specialization" => "Таланты",
/* Ranking */
"honor" => "Честь",
"kills" => "Почетных убийств",
"points" => "Очки",
"pos" => "Поз.",
"rating" => "Рейтинг",
"types" => "Types",
/* Guild/Team */
"all" => "All",
"all_games" => "Поединки",
"all_ranks" => "All Ranks",
"arena_team" => "Команда",
"bank_contents" => "Bank Contents",
"bank_log" => "Bank Log",
"both" => "Оба",
"captain" => "Командир команды",
"current" => "Current",
"emblem" => "Emblem",
"female" => "Жен.",
"games" => "Games",
"gender" => "Пол",
"guild" => "Гильдия",
"guild_master" => "Глава Гильдии",
"guild_rank" => "Ранг в Гильдии",
"guild_roster" => "Участники",
"guild_roster_filter" => "Фильтр списка участников гильдии",
"guild_statistics" => "Guild Statistics",
"leader" => "Глава",
"losses" => "Поражения",
"male" => "Муж",
"master" => "Глава",
"members" => "Участников",
"member_name" => "Участники",
"note" => "Информация: Слишком много участников гильдии. Только участников высокого уровня внесены в список.",
"own_stats" => "'s  Stats",
"rank" => "Ранг",
"reset_filters" => "Сброс фильтра",
"season" => "Season",
"team_member" => "Участник команды",
"team_members" => "Участники команды",
"team_name" => "Название команды",
"team_profile" => "Team Profiles",
"team_rating" => "Team Rating",
"team_stats" => "Team Stats",
"team_statistics" => "Arena Team Statistics",
"this_week" => "This Week",
"total_results" => "Результатов",
"type" => "Type",
"win" => "% побед",
"wins" => "Победы",
"win_loss" => "Win - Loss",
/* Item */
"armor" => "Броня",
"block" => "Блок",
"chance" => "Chance",
"classes" => "Классы",
"count" => "Количество",
"cost" => "Стоимость",
"damage" => "Единиц урона",
"damage_per_sec" => "Единиц урона в секунду",
"disenchantable" => "Можно разрушить чары",
"disenchants_into" => "Disenchants into",
"dmg" => "Урон",
"drop_chance" => "Вероятность найти",
"durability" => "Прочность",
"effects" => "Effects",
"enchanting_to_disenchant" => "Enchanting to disenchant",
"enchantment" => "Enchantment",
"equip" => "При надевании",
"hit_chance" => "Шанс удара",
"item_level" => "Уровень предмета",
"item_name" => "Название",
"loading" => "Загрузка...",
"races" => "Рассы",
"random_enchantment" => "Разрушение чар",
"relevance" => "Соответствие",
"requires" => "Требуется",
"requires_level" => "Требуемый уровень",
"resistance" => "Сопротивляемость магии",
"sells" => "Продается за",
"set" => "Комплект",
"slot" => "Ячейка",
"socket" => "Оправа",
"socket_bonus" => "Бонус за вставку в оправу",
"source" => "Источник",
"speed" => "Скорость",
"unknown" => "Unknown",
"unknown_trigger" => "UNKNOWN TRIGGER",
"unk_state_type" => "Unknown Stat Type",
"use" => "При использовании",
"value" => "Value",
// Resistances
"arcane" => "Тайная",
"fire" => "Огонь",
"frost" => "Лед",
"holy" => "Holy",
"nature" => "Природа",
"shadow" => "Темная",
// Bind status
"binds_when_equipped" => "Становится персональным при надевании",
"binds_when_pickup" => "Становится персональным при получении",
"binds_when_used" => "Становится персональным при использовании",
// Source
"chest_drop" => "Трофей",
"created" => "Созданный",
"drop" => "Добыча",
"pvp_reward" => "Награда за PvP",
"quest_item" => "Ключевой предмет",
"quest_reward" => "Награда за задание",
"vendor" => "Продавец",
// Drop Chances
"extrem_low" => "Минимальный",
"guaranteed" => "Постоянный",
"high" => "Высокий",
"low" => "Низкий",
"medium" => "Средний",
"very_low" => "Очень низкий",
// Sockets
"blue" => "Синяя",
"meta" => "Мета",
"prismatic" => "Prismatic",
"red" => "Красная",
"unk" => "Нет",
"yellow" => "Желтая",
/* Search */
"all_items" => "Предметы",
"arena_teams" => "Команды Арены",
"arena_team_profiles" => "Команды Арены",
"arena_team_search" => "Поиск команд Арены",
"armory_search" => "Поиск по Оружейной",
"characters" => "Персонажи",
"char_profiles" => "Профили персонажей",
"char_search" => "Поиск Персонажей",
"guilds" => "Гильдии",
"guild_profiles" => "Профили Гильдий",
"guild_search" => "Поиск Гильдий",
"in_realm" => "in realm",
"items" => "Предметы",
"item_lookup" => "Поиск по Оружейной",
"item_search" => "Предметы",
"item_search_result" => "Результаты поиска среди предметов",
"loading_box" => "ПОИСК",
"no_results" => "Нет результат для отображения по вашему запросу!",
"of" => "из",
"page" => "Страница",
"reset_form" => "Очистить форму",
"results_for" => "results for",
"search" => "Поиск",
"search_for_guilds" => "Поиск профилей Гильдий",
"search_for_profiles" => "Поиск профилей Персонажей",
"search_for_teams" => "Поиск профилей команд Aрены",
"search_result" => "Результаты по вашему запросу будут отображаться здесь.",
/* Account */
"acc_char" => "Characters in the account",
"acc_created" => "Creation of account",
"acc_name" => "Account Name",
"acc_expansion" => "Account Expansion",
"acc_expansion_changed" => "Acount Expansion Changed",
"acc_password" => "Password",
"banned" => "is banned",
"cancel" => "Cancel",
"change" => "Change",
"change_pass" => "Change Password",
"complete" => "is completed",
"create" => "Create",
"create_acc" => "Create Account",
"email" => "Email",
"invalid_email" => "Invalid Email",
"ip" => "IP",
"length_newpass" => "Invalid length on New Password field (min5, max 30)",
"length_name" => "Invalid length on Account Name field (min 4, max 25)",
"length_pass" => "Invalid length on Password field (min5, max 30)",
"logged_as" => "You are logged as",
"login" => "Login",
"log_in" => "Log In",
"log_out" => "Log out",
"login_required" => "Login Required",
"max_ip" => "From you IP maximum accounts are already created",
"message" => "You must log in with your server account to access protected areas of the Armory.",
"name_exist" => "Account Name already exists",
"new_pass" => "New Password",
"new_rep_newpass" => "New Password and Repeat New Password fields must match.",
"old_pass" => "Old Password",
"classic" => "Classic",
"pass_changed" => "Password Changed",
"pass_verifipass" => "Password and Verification Password fields must match",
"rep_newpass" => "Repeat New Password",
"tbc" => "TBC",
"verify_pass" => "Verify Password",
"wrong_old_pass" => "Wrong Old Password",
"wrong_user_pass" => "Wrong username or password",
"wotlk" => "WotLK",
);
?>