<?php
/* $Id$ */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
$byteUnits = array('Octets', 'Ko', 'Mo', 'Go');

$day_of_week = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
$month = array('Janvier', 'F�vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao�t', 'Septembre', 'Octobre', 'Novembre', 'D�cembre');
// Voir http://www.php.net/manual/en/function.strftime.php pour la variable
// ci-dessous
$datefmt = '%A %d %B %Y � %H:%M';


$strAccessDenied = 'Acc�s refus�';
$strAction = 'Action';
$strAddDeleteColumn = 'Ajouter/effacer x colonne(s)';
$strAddDeleteRow = 'Ajouter/effacer x ligne(s)';
$strAddNewField = 'Ajouter un champ';
$strAddPriv = 'Ajouter un privil�ge';
$strAddPrivMessage = 'Vous avez ajout� un privil�ge';
$strAddSearchConditions = 'Crit�res de recherche (pour l\'�nonc� "where"):';
$strAddToIndex = 'Ajouter � la clef&nbsp;%s&nbsp;colonne(s)';
$strAddUser = 'Ajouter un utilisateur';
$strAddUserMessage = 'Vous avez ajout� un utilisateur';
$strAffectedRows = 'Nombre d\'enregistrements affect�s :';
$strAfter = 'Apr�s %s';
$strAfterInsertBack = 'Retourner � la page pr�c�dente';
$strAfterInsertNewInsert = 'Ins�rer un nouvel enregistrement';
$strAll = 'Tout';
$strAlterOrderBy = '<b>Ordonner</b> la table par';
$strAnalyzeTable = 'Analyser la table';
$strAnd = 'et';
$strAnIndex = 'Un index a �t� ajout� sur %s';
$strAny = 'N\'importe quel';
$strAnyColumn = 'Toute colonne';
$strAnyDatabase = 'Toute base de donn�es';
$strAnyHost = 'Tout serveur';
$strAnyTable = 'Toute table';
$strAnyUser = 'Tout utilisateur';
$strAPrimaryKey = 'Une cl� primaire a �t� ajout�e sur %s';
$strAscending = 'Croissant';
$strAtBeginningOfTable = 'En d�but de Table';
$strAtEndOfTable = 'En fin de Table';
$strAttr = 'Attributs';

$strBack = 'Retour';
$strBinary = 'Binaire';
$strBinaryDoNotEdit = 'Binaire - ne pas �diter';
$strBookmarkDeleted = 'Le bookmark a �t� effac�.';
$strBookmarkLabel = 'Intitul�';
$strBookmarkQuery = 'Requ�tes bookmark�es';
$strBookmarkThis = 'Bookmarker cette requ�te';
$strBookmarkView = 'Voir uniquement';
$strBrowse = 'Afficher';
$strBzip = '"bzipp�"';

$strCantLoadMySQL = 'ne peux charger l\'extension MySQL,<br />v�rifiez la configuration PHP';
$strCantRenameIdxToPrimary = 'La clef ne peut �tre renomm�e PRIMARY&nbsp;!';
$strCardinality = 'Cardinalit�';
$strCarriage = 'Retour de chariot : \\r';
$strChange = 'Modifier';
$strChangeDisplay = 'Champ � afficher';
$strChangePassword = 'Modifier le mot de passe';
$strCheckAll = 'Tout cocher';
$strCheckDbPriv = 'Afficher les privil�ges sur';
$strCheckTable = 'V�rifier la table';
$strChoosePage = 'Page � �diter';
$strColumn = 'Colonne';
$strColumnNames = 'Nom des colonnes';
$strCompleteInserts = 'Insertions compl�tes';
$strConfigFileError = 'phpMyAdmin n\'a pu lire votre fichier de configuration!<br />Il est possible qu\'il contienne une erreur de syntaxe, ou que PHP soit incapable de le trouver<br />� l\'aide du lien suivant, vous pouvez v�rifier le message d\'erreur g�n�r� par PHP;<br />la plupart du temps, un apostrophe ou un point-virgule sont manquants.<br />Si vous recevez une page blanche, aucune erreur n\'a �t� d�tect�e.';
$strConfigureTableCoord = 'Les coordonn�es de la table %s n\'ont pas �t� configur�es';
$strConfirm = 'Veuillez confirmer';
$strCookiesRequired = 'Vous devez accepter les cookies pour poursuivre.';
$strCopyTable = '<b>Copier</b> la table vers (base<b>.</b>table)&nbsp;:';
$strCopyTableOK = 'La table %s a �t� copi�e vers %s.';
$strCreate = 'Cr�er';
$strCreateIndex = 'Cr�er une clef sur&nbsp;%s&nbsp;colonne(s)';
$strCreateIndexTopic = 'Cr�er un nouvelle clef';
$strCreateNewDatabase = 'Cr�er une base de donn�es';
$strCreateNewTable = 'Cr�er une nouvelle table sur la base %s';
$strCreatePage = 'Cr�er une page';
$strCriteria = 'Crit�re';

$strData = 'Donn�es';
$strDatabase = 'Base de donn�es';
$strDatabaseHasBeenDropped = 'La base de donn�es %s a �t� effac�e.';
$strDatabases = 'bases de donn�es';
$strDatabasesStats = 'Statistiques sur les bases de donn�es';
$strDatabaseWildcard = 'Base de donn�es (passepartout autoris�):';
$strDataOnly = 'Donn�es seulement';
$strDefault = 'D�faut';
$strDelete = 'Effacer';
$strDeleted = 'L\'enregistrement a �t� effac�';
$strDeletedRows = 'Nombre d\'enregistrements effac�s :';
$strDeleteFailed = 'L\'effacement a �chou�';
$strDeleteUserMessage = 'Vous avez effac� l\'utilisateur %s.';
$strDescending = 'D�croissant';
$strDisplay = 'Montrer';
$strDisplayOrder = 'Ordre d\'affichage :';
$strDisplayPDF = 'Afficher le sch�ma en PDF';
$strDoAQuery = 'Recherche par valeur (passepartout: "%")';
$strDocu = 'Documentation';
$strDoYouReally = 'Voulez-vous vraiment effectuer ';
$strDrop = 'Supprimer';
$strDropDB = 'Supprimer la base %s';
$strDropTable = 'Supprimer la table';
$strDumpingData = 'Contenu de la table';
$strDumpXRows = 'Exporte %s enregistrement(s) � partir du rang n� %s.';
$strDynamic = 'dynamique';

$strEdit = 'Modifier';
$strEditPDFPages = 'Pr�parer le sch�ma en PDF';
$strEditPrivileges = 'Changer les privil�ges';
$strEffective = 'effectif';
$strEmpty = 'Vider';
$strEmptyResultSet = 'MySQL n\'a retourn� aucun enregistrement.';
$strEnd = 'Fin';
$strEnglishPrivileges = ' Veuillez noter que les noms de privil�ges sont exprim�s en anglais';
$strError = 'Erreur';
$strExplain = 'Expliquer SQL';
$strExport = 'Exporter';
$strExportToXML = 'Exporter en format XML';
$strExtendedInserts = 'Insertions �tendues';
$strExtra = 'Extra';

$strField = 'Champ';
$strFieldHasBeenDropped = 'Le champ %s a �t� effac�';
$strFields = 'Champs';
$strFieldsEmpty = 'Il faut indiquer le nombre de champs';
$strFieldsEnclosedBy = 'Champs entour�s par';
$strFieldsEscapedBy = 'Caract�re sp�cial';
$strFieldsTerminatedBy = 'Champs termin�s par';
$strFixed = 'fixe';
$strFlushTable = 'Recharger la table ("FLUSH")';
$strFormat = 'format';
$strFormEmpty = 'Formulaire incomplet !';
$strFullText = 'Textes complets';
$strFunction = 'Fonction';

$strGenTime = 'G�n�r� le ';
$strGenBy = 'G�n�r� par';
$strGo = 'Ex�cuter';
$strGrants = 'Autres privil�ges';
$strGzip = '"gzipp�"';

$strHasBeenAltered = 'a �t� modifi�(e).';
$strHasBeenCreated = 'a �t� cr��(e).';
$strHome = 'Accueil';
$strHomepageOfficial = 'Site officiel de phpMyAdmin';
$strHomepageSourceforge = 'Page de T�l�chargement phpMyAdmin sur Sourceforge';
$strHost = 'Serveur';
$strHostEmpty = 'Le nom de serveur est vide';

$strIdxFulltext = 'Texte entier';
$strIfYouWish = 'Si vous d�sirez ne charger que certaines colonnes, indiquez leurs noms, s�par�s par des virgules.';
$strIgnore = 'Ignorer';
$strIndex = 'Index';
$strIndexes = 'Index';
$strIndexHasBeenDropped = 'L\'index %s a �t� effac�';
$strIndexName = 'Nom de la clef&nbsp;:';
$strIndexType = 'Type de clef&nbsp;:';
$strInsert = 'Ins�rer';
$strInsertAsNewRow = 'Ins�rer en tant que nouvel enregistrement';
$strInsertedRows = 'Nombre d\'enregistrements ins�r�s :';
$strInsertNewRow = 'Ins�rer un nouvel enregistrement';
$strInsertTextfiles = 'Ins�rer des donn�es provenant d\'un fichier texte dans la table';
$strInstructions = 'Instructions';
$strInUse = 'utilis�';
$strInvalidName = '"%s" est un mot r�serv�, il ne peut �tre utilis� comme nom de base/table/champ.';

$strKeepPass = 'Conserver le mot de passe';
$strKeyname = 'Nom de la cl�';
$strKill = 'Supprimer';

$strLength = 'Long.';
$strLengthSet = 'Taille/Valeurs*';
$strLimitNumRows = 'Nombre d\'enregistrements par page';
$strLineFeed = 'Saut de ligne : \\n';
$strLines = 'Lignes';
$strLinesTerminatedBy = 'Lignes termin�es par';
$strLinkNotFound = 'Lien absent';
$strLinksTo = 'Reli� �';
$strLocationTextfile = 'Emplacement du fichier texte';
$strLogin = 'Entrer';
$strLogout = 'Quitter';
$strLogUsername = 'Nom d\'utilisateur&nbsp;:';
$strLogPassword = 'Mot de passe&nbsp;:';

$strModifications = 'Les modifications ont �t� sauvegard�es.';
$strModify = 'Modifier';
$strModifyIndexTopic = 'Modifier une clef';
$strMoveTable = '<b>D�placer</b> la table vers (base<b>.</b>table)&nbsp;:';
$strMoveTableOK = 'La table %s a �t� d�plac�e vers %s.';
$strMySQLReloaded = 'MySQL recharg�.';
$strMySQLSaid = 'MySQL a r�pondu:';
$strMySQLServerProcess = 'MySQL %pma_s1% sur le serveur %pma_s2% - utilisateur&nbsp;: %pma_s3%';
$strMySQLShowProcess = 'Afficher les processus';
$strMySQLShowStatus = 'Afficher l\'�tat du serveur MySQL';
$strMySQLShowVars = 'Afficher les variables du serveur MySQL';

$strName = 'Nom';
$strNext = 'Suivant';
$strNo = 'Non';
$strNoDescription = 'pas de description';
$strNoDropDatabases = 'La commande "DROP DATABASE" est d�sactiv�e.';
$strNoDatabases = 'Aucune base de donn�es';
$strNoFrames = 'L\'utilisation de phpMyAdmin est plus ais�e avec un navigateur <b>supportant les "frames"</b>.';
$strNoIndex = 'Aucune clef n\'est d�finie&nbsp;!';
$strNoIndexPartsDefined = 'Aucune colonne n\'a �t� d�finie pour cette clef&nbsp;!';
$strNoModification = 'Pas de modifications';
$strNone = 'Nulle';
$strNoPassword = 'aucun mot de passe';
$strNoPhp = 'Sans source PHP';
$strNoPrivileges = 'aucun privil�ge';
$strNoQuery = 'Aucune requ�te SQL !';
$strNoRights = 'Vous n\'�tes pas autoris� � acc�der � cette page';
$strNoTablesFound = 'Aucune table n\'a �t� trouv�e dans cette base.';
$strNotNumber = 'Ce n\'est pas un nombre !';
$strNotSet = 'La table <b>%s</b> est absente ou non d�finie dans %s';
$strNotValidNumber = ' n\'est pas un nombre valide !';
$strNoUsersFound = 'Il n\'y a aucun utilisateur';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s occurence(s) dans la table <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total :</b> <i>%s</i> occurence(s)';

$strOftenQuotation = 'Souvent des guillemets. OPTIONNEL signifie que seuls les champs de type char et varchar sont entour�s par ce caract�re.';
$strOperations = 'Op�rations';
$strOptimizeTable = 'Optimiser la table';
$strOptionalControls = 'Optionnel. Indique le caract�re qui permet d\'enlever l\'effet des caract�res sp�ciaux.';
$strOptionally = 'OPTIONNEL';
$strOptions = 'Options';
$strOr = 'Ou';
$strOverhead = 'Perte';

$strPageNumber = 'Page n�:';
$strPartialText = 'Textes r�duits';
$strPassword = 'Mot de passe';
$strPasswordEmpty = 'Le mot de passe est vide';
$strPasswordNotSame = 'Les mots de passe doivent �tre identiques';
$strPdfDbSchema = 'Schema de la base "%s" - Page %s';
$strPdfInvalidPageNum = 'Num�ro de page PDF non d�fini !';
$strPdfInvalidTblName = 'La table "%s" n\'existe pas !';
$strPhp = 'Cr�er source PHP';
$strPHPVersion = 'Version de PHP';
$strPmaDocumentation = 'Documentation de phpMyAdmin';
$strPmaUriError = 'Le param�tre <tt>$cfg[\'PmaAbsoluteUri\']</tt> DOIT �tre renseign� dans votre fichier de configuration !';
$strPos1 = 'D�but';
$strPrevious = 'Pr�c�dent';
$strPrimary = 'Primaire';
$strPrimaryKey = 'Cl� primaire';
$strPrimaryKeyHasBeenDropped = 'La cl� primaire a �t� effac�e';
$strPrimaryKeyName = 'Le nom d\'une clef primaire doit �tre PRIMARY&nbsp;!';
$strPrimaryKeyWarning = '("PRIMARY" <b>doit et ne peut �tre</b> que le nom d\'une clef primaire&nbsp;!)';
$strPrintView = 'Version imprimable';
$strPrivileges = 'Privil�ges';
$strProperties = 'Propri�t�s';

$strQBE = 'Requ�te par un exemple';
$strQBEDel = 'Effacer';
$strQBEIns = 'Ajouter';
$strQueryOnDb = 'Requ�te SQL sur la base <b>%s</b>&nbsp;:';

$strRecords = 'Enregistrements';
$strReferentialIntegrity = 'V�rifier l\'int�grit� r�f�rentielle';
$strReloadFailed = 'MySQL n\'a pu �tre recharg�.';
$strReloadMySQL = 'Recharger MySQL';
$strRelationView = 'Gestion des relations';
$strRememberReload = 'N\'oubliez pas de recharger MySQL';
$strRenameTable = '<b>Changer le nom</b> de la table pour';
$strRenameTableOK = 'La table %s se nomme maintenant %s';
$strRepairTable = 'R�parer la table';
$strReplace = 'Remplacer';
$strReplaceTable = 'Remplacer les donn�es de la table avec le fichier';
$strReset = 'R�initialiser les valeurs';
$strReType = 'Entrer � nouveau';
$strRevoke = 'R�voquer';
$strRevokeGrant = 'R�voquer "grant option"';
$strRevokeGrantMessage = 'Vous avez r�voqu� "grant option" pour %s';
$strRevokeMessage = 'Vous avez r�voqu� les privil�ges pour %s';
$strRevokePriv = 'R�voquer les privil�ges';
$strRowLength = 'Longueur enr.';
$strRows = 'Enregistrements';
$strRowsFrom = 'ligne(s) � partir de l\'enregistrement n�';
$strRowSize = ' Taille enr. ';
$strRowsModeHorizontal= 'horizontal';
$strRowsModeOptions= 'en mode %s et r�p�ter les en-t�tes � chaque groupe de %s';
$strRowsModeVertical= 'vertical';
$strRowsStatistic = 'Statistiques';
$strRunning = 'sur le serveur %s';
$strRunQuery = 'Ex�cuter la requ�te';
$strRunSQLQuery = 'Ex�cuter une ou des <b>requ�tes</b> sur la base %s';

$strSave = 'Sauvegarder';
$strScaleFactorSmall = 'Veuillez augmenter l\'�chelle car le sch�ma d�borde la page';
$strSearch = 'Rechercher';
$strSearchFormTitle = 'Effectuer une nouvelle recherche dans la base de donn�es';
$strSearchInTables = 'Dans la(les) table(s) :';
$strSearchNeedle = 'Mot(s) ou Valeur � rechercher (passe-partout: "%") :';
$strSearchOption1 = 'au moins un mot';
$strSearchOption2 = 'tous les mots';
$strSearchOption3 = 'phrase exacte';
$strSearchOption4 = 'expression r�guli�re';
$strSearchResultsFor = 'R�sultats de la recherche de "<i>%s</i>" %s :';
$strSearchType = 'Type de recherche :';
$strSelect = 'S�lectionner';
$strSelectADb = 'Choisissez une base de donn�es';
$strSelectAll = 'Tout s�lectionner';
$strSelectFields = 'Choisir les champs � afficher (au moins un)';
$strSelectNumRows = 'dans la requ�te';
$strSelectTables = 'Choisissez les tables';
$strSend = 'Transmettre';
$strServerChoice = 'Choix du serveur';
$strServerVersion = 'Version du serveur';
$strSetEnumVal = 'Les diff�rentes valeurs des champs de type enum/set sont � sp�cifier sous la forme \'a\',\'b\',\'c\'...<br />Pour utiliser un caract�re "\\" ou "\'" dans l\'une de ces valeurs, faites le pr�c�der du caract�re d\'�chappement "\\" (par exemple \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Afficher';
$strShowAll = 'Tout afficher';
$strShowColor = 'Couleurs';
$strShowCols = 'Afficher les colonnes';
$strShowGrid = 'Grille';
$strShowingRecords = 'Affichage des enregistrements';
$strShowPHPInfo = 'Afficher les informations relatives � PHP';
$strShowTableDimension = 'Dimension des tables';
$strShowTables = 'Afficher les tables';
$strShowThisQuery = 'R�afficher la requ�te apr�s ex�cution';
$strSingly = '(� refaire apr�s insertions/destructions)';
$strSize = 'Taille';
$strSort = 'Tri';
$strSpaceUsage = 'Espace utilis�';
$strSplitWordsWithSpace = 'S�parer les mots par un espace (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'requ�te SQL';
$strSQLResult = 'Resultat de la requ�te SQL';
$strStatement = 'Information';
$strStrucCSV = 'Donn�es CSV';
$strStrucData = 'Structure et donn�es';
$strStrucDrop = 'Ajouter des �nonc�s "drop table"';
$strStrucExcelCSV = 'Donn�es CSV pour Ms Excel';
$strStrucOnly = 'Structure seule';
$strStructPropose = 'Sugg�rer des optimisations quant � la structure de la table';
$strStructure = 'Structure';
$strSubmit = 'Ex�cuter';
$strSuccess = 'Votre requ�te SQL a �t� ex�cut�e avec succ�s';
$strSum = 'Somme';

$strTable = 'table ';
$strTableComments = 'Commentaires sur la table';
$strTableEmpty = 'Le nom de la table est vide';
$strTableHasBeenDropped = 'La table %s a �t� effac�e';
$strTableHasBeenEmptied = 'La table %s a �t� vid�e';
$strTableHasBeenFlushed = 'La table %s a �t� recharg�e';
$strTableMaintenance = 'Maintenance de la table';
$strTables = '%s table(s)';
$strTableStructure = 'Structure de la table';
$strTableType = 'Table en format';
$strTextAreaLength = 'Il est possible que ce champ<br />ne soit pas �ditable<br />en raison de sa longueur';
$strTheContent = 'Le contenu de votre fichier a �t� ins�r�.';
$strTheContents = 'Le contenu du fichier remplacera le contenu de la table pour les enregistrements ayant une valeur de cl� primaire ou unique identique.';
$strTheTerminator = 'Le caract�re qui s�pare chacun des champs.';
$strTotal = 'total';
$strType = 'Type';

$strUncheckAll = 'Tout d�cocher';
$strUnique = 'Unique';
$strUnselectAll = 'Tout d�selectionner';
$strUpdatePrivMessage = 'Vous avez modifi� les privil�ges pour %s.';
$strUpdateProfile = 'Modifier le profil :';
$strUpdateProfileMessage = 'Le profil a �t� modifi�.';
$strUpdateQuery = 'Mise-�-jour de la requ�te';
$strUsage = 'Espace';
$strUseBackquotes = 'Prot�ger les noms des tables et des champs par des&nbsp;"`"';
$strUser = 'Utilisateur';
$strUserEmpty = 'Le nom d\'utilisateur est vide';
$strUserName = 'Nom d\'utilisateur';
$strUsers = 'Utilisateurs et privil�ges';
$strUseTables = 'Utiliser les tables';

$strValue = 'Valeur';
$strViewDump = '<b>Afficher le sch�ma</b> de la table';
$strViewDumpDB = 'Afficher le sch�ma de la base ';

$strWelcome = 'Bienvenue � %s ';
$strWithChecked = 'Pour la s�lection :';
$strWrongUser = 'Erreur d\'utilisateur/mot de passe. Acc�s refus�';

$strYes = 'Oui';

$strZip = '"zipp�"';

$strMissingBracket = 'Missing Bracket';  //to translate
?>
