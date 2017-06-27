/*!--------------------------------------------------------
 * Copyright (C) Microsoft Corporation. All rights reserved.
 *--------------------------------------------------------*/
define("vs/code/node/cliProcessMain.nls.ru",{"vs/base/common/severity":["Ошибка","Предупреждение","Сведения"],"vs/base/node/zip":["{0} не найдено в ZIP-архиве."],"vs/code/node/cliProcessMain":['Расширение "{0}" не найдено.','Расширение "{0}" не установлено.',"Используйте полный идентификатор расширения, включающий издателя, например: {0}",'Расширение "{0}" успешно установлено.','Расширение "{0}" уже установлено.','Найдено "{0}" в Marketplace.',"Установка...",'Расширение "{0}" версии {1} успешно установлено.',"Удаление {0}...",'Расширение "{0}" успешно удалено.'],"vs/platform/configuration/common/configurationRegistry":["Переопределения конфигурации по умолчанию","Настройка переопределяемых параметров редактора для языка {0}.","Настройка параметров редактора, переопределяемых для языка.","Добавляет параметры конфигурации.","Краткая сводка параметров. Эта метка будет использоваться в файле параметров в качестве разделяющего комментария.","Описание свойств конфигурации.","Невозможно зарегистрировать \"{0}\". Оно соответствует шаблону свойства '\\\\[.*\\\\]$' для описания параметров редактора, определяемых языком. Используйте участие configurationDefaults.",'Невозможно зарегистрировать "{0}". Это свойство уже зарегистрировано.',"configuration.properties должно быть объектом","Если тип configuration.type задан, то он должен иметь значение object","configuration.title должно быть строкой","Предоставляет параметры конфигурации редактора по умолчанию в соответствии с языком."],"vs/platform/extensionManagement/common/extensionManagement":["Расширения","Параметры"],"vs/platform/extensionManagement/node/extensionGalleryService":["Расширение не найдено","Не удалось найти версию {0}, совместимую с этой версией кода."],"vs/platform/extensionManagement/node/extensionManagementService":["Недопустимое расширение: package.json не является файлом JSON.","Перезапустите код перед переустановкой {0}.","Перезапустите код перед переустановкой {0}.",'При установке "{0}" также устанавливаются зависимости. Вы хотите продолжить?',"Да","Нет","Перезапустите код перед переустановкой {0}.",'Вы хотите удалить "{0}" отдельно или вместе с зависимостями?',"Только","Все","Отмена",'Вы действительно хотите удалить "{0}"?',"ОК","Отмена",'Не удается удалить расширение "{0}". От него зависит расширение "{1}".','Не удается удалить расширение "{0}". От него зависят расширения "{1}" и "{2}".','Не удается удалить расширение "{0}". От него зависят расширения "{1}", "{2}" и другие.',"Не удалось найти расширение"],"vs/platform/extensions/common/extensionsRegistry":['Для расширений VS Code указывает версию VS Code, с которой совместимо расширение. Она не может быть задана как "*". Например, ^0.10.5 сообщает о совместимости с минимальной версией VS Code 0.10.5.',"Издатель расширения VS Code.","Отображаемое имя расширения, используемого в коллекции VS Code.","Категории, используемые коллекцией VS Code для классификации расширения.","Баннер, используемый в магазине VS Code.","Цвет баннера в заголовке страницы магазина VS Code.","Цветовая тема для шрифта, используемого в баннере.","Все публикации расширения VS Code, представленные этим пакетом.",'Добавляет метку "Предварительная версия" для расширения в Marketplace.',"События активации для расширения кода VS Code.","Событие активации выдается каждый раз, когда открывается файл, который разрешается к указанному языку.","Событие активации выдается каждый раз при вызове указанной команды.","Событие активации выдается каждый раз при запуске сеанса отладки указанного типа.","Событие активации выдается каждый раз при открытии папки, содержащей по крайней мере один файл, который соответствует указанной стандартной маске.","Событие активации выдается каждый раз при развертывании указанного окна.","Событие активации выдается при запуске VS Code. Для удобства пользователя используйте это событие в своем расширении только в том случае, если другие сочетания событий не подходят.","Массив эмблем, отображаемых на боковой панели страницы расширения Marketplace.","URL-адрес изображения эмблемы.","Ссылка на эмблему.","Описание эмблемы.","Зависимости от других расширений. Идентификатор расширения — всегда ${publisher}.${name}. Например: vscode.csharp.","Скрипт, выполняемый перед публикацией пакета в качестве расширения VS Code.","Путь к значку размером 128 x 128 пикселей."],"vs/platform/extensions/node/extensionValidator":["Не удалось проанализировать значение engines.vscode {0}. Используйте, например, ^0.10.0, ^1.2.3, ^0.11.0, ^0.10.x и т. д.","Версия, указанная в engines.vscode ({0}), недостаточно конкретная. Для версий vscode до 1.0.0 укажите по крайней мере основной и дополнительный номер версии. Например, 0.10.0, 0.10.x, 0.11.0 и т. д.","Версия, указанная в engines.vscode ({0}), недостаточно конкретная. Для версий vscode после 1.0.0 укажите по крайней мере основной номер версии. Например, 1.10.0, 1.10.x, 1.x.x, 2.x.x и т. д.",'Расширение несовместимо с кодом "{0}". Расширению требуется: {1}.',"Пустое описание расширения",'свойство "{0}" является обязательным и должно иметь тип string','свойство "{0}" является обязательным и должно иметь тип string','свойство "{0}" является обязательным и должно иметь тип string','свойство "{0}" является обязательным и должно быть типа object','свойство "{0}" является обязательным и должно иметь тип string','свойство "{0}" может быть опущено или должно быть типа "string []"','свойство "{0}" может быть опущено или должно быть типа "string []"','оба свойства, "{0}" и "{1}", должны быть либо указаны, либо опущены','свойство "{0}" может быть опущено или должно иметь тип string',"Ожидается, что функция main ({0}) будет включена в папку расширения ({1}). Из-за этого расширение может стать непереносимым.",'оба свойства, "{0}" и "{1}", должны быть либо указаны, либо опущены',"Версия расширения несовместима с semver."],"vs/platform/message/common/message":["Закрыть","Позже","Отмена"],"vs/platform/request/node/request":["HTTP","Используемый параметр прокси. Если он не задан, он будет взят из переменных среды http_proxy и https_proxy.","Должен ли сертификат прокси-сервера проверяться по списку предоставленных ЦС.",'Значение, отправляемое как заголовок "Proxy-Authorization" для каждого сетевого запроса.'],"vs/platform/telemetry/common/telemetryService":["Телеметрия","Разрешить отправку сведений об использовании и ошибках в корпорацию Майкрософт."]});
//# sourceMappingURL=https://ticino.blob.core.windows.net/sourcemaps/379d2efb5539b09112c793d3d9a413017d736f89/core/vs/code/node/cliProcessMain.nls.ru.js.map
