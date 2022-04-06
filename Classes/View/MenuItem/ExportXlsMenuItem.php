<?php
namespace Fab\Vidi\View\MenuItem;

/*
 * This file is part of the Fab/Vidi project under GPLv2 or later.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

use TYPO3\CMS\Core\Imaging\Icon;
use Fab\Vidi\View\AbstractComponentView;

/**
 * View which renders a "xls export" item to be placed in the menu.
 */
class ExportXlsMenuItem extends AbstractComponentView
{

    /**
     * Renders a "xls export" item to be placed in the menu.
     * Only the admin is allowed to export for now as security is not handled.
     *
     * @return string
     * @throws \InvalidArgumentException
     */
    public function render()
    {
        $result = sprintf('<li><a href="#" class="dropdown-item export-xls" data-format="xls">%s %s</a></li>',
            $this->getIconFactory()->getIcon('mimetypes-excel', Icon::SIZE_SMALL),
            $this->getLanguageService()->sL('LLL:EXT:vidi/Resources/Private/Language/locallang.xlf:export-xls')
        );
        return $result;
    }

}
