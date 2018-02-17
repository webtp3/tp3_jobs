
plugin.tx_tp3jobs_offers {
  view {
    templateRootPaths.0 = EXT:tp3_jobs/Resources/Private/Templates/
    templateRootPaths.1 = plugin.tx_tp3jobs_offers.view.templateRootPath
    partialRootPaths.0 = EXT:tp3_jobs/Resources/Private/Partials/
    partialRootPaths.1 = plugin.tx_tp3jobs_offers.view.partialRootPath
    layoutRootPaths.0 = EXT:tp3_jobs/Resources/Private/Layouts/
    layoutRootPaths.1 = plugin.tx_tp3jobs_offers.view.layoutRootPath
  }
  persistence {
    storagePid = plugin.tx_tp3jobs_offers.persistence.storagePid
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_tp3jobs._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-tp3-jobs table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-tp3-jobs table th {
        font-weight:bold;
    }

    .tx-tp3-jobs table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
