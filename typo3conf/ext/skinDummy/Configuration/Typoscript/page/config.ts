[version=6] && [browser= msie]
    config.absRefPrefix = http://{$config.domain}/
[end]

config {

    ### Doctype / Utf-8 ###
    doctype = html5
    xhtmlDoctype >
    xmlprologue >

    renderCharset = utf-8
    additionalHeaders = Content-Type:text/html;charset=utf-8
    xhtml_cleaning >

    disableCharsetHeader = 0
    enableContentLengthHeader= 0
    #disableAllHeaderCode = 1

    ### Langage ###
    language              = fr
    locale_all            = fr_FR.utf8
    htmlTag_langKey       = fr

    ### Langage ###
    baseURL = http://{$config.domain}/
    sys_language_uid    = 0
    sys_language_mode = strict

    ### Locale ###
    htmlTag_langKey = fr
    linkVars := addToList(L)
    uniqueLinkVars = 1
    # linkVars = L

    ## Supression du JS par default
    removeDefaultJS = external

    #### Anti-Spam adresse mail ####
    spamProtectEmailAddresses=1
    spamProtectEmailAddresses_atSubst=(at)
    spamProtectEmailAddresses_lastDotSubst=(dot)

    #### Rewriting Adresse (Real URL) ###
    simulateStaticDocuments = 0
    prefixLocalAnchors = all
    tx_realurl_enable = {$config.realURL}

    #### Suppression des commentaires dans le html ###
    disablePrefixComment = 1

    ### Gestion du cache ###
    no_cache = {$config.noCache}
    cache_period = {$config.cachePeriod}
    sendCacheHeaders = {$config.sendCacheHeaders}
    cache_clearAtMidnight = {$config.cacheClearAtMidnight}

    ### Compression JS ###
    compressJs = {$config.compressJs}

    ### Compression CSS ###
    compressCss = {$config.compressCss}

    ### Debug ###
    debug = {$config.debug}

    ### Activation du panneau d'administration ###
    admPanel = {$config.adminPanel}
    admPanel {
        module.edit.forceDisplayIcons = 1
        module.edit.forceDisplayFieldIcons = 1
    }

    ### Indexation des pages pour le moteur de recherche ###
    index_enable    = {$config.index_enable}
    index_externals = {$indexed_search.index_externals}
    index_metatags = {$indexed_search.index_metatags}
    index_descrLgd = {$indexed_search.index_descrLgd}
}