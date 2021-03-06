<?php
/**
 *   This file is part of the Befree.
 *
 *   @copyright   Henrique Mukanda <mahi2hm@outlook.fr>
 *   @copyright   Bernard ngandu <ngandubernard@gmail.com>
 *   @link    https://github.com/Mahi2/BeFree
 *   @link    https://github.com/bernard-ng/Befree
 *   @license   http://framework.zend.com/license/new-bsd New BSD License
 *
 *   For the full copyright and license information, please view the LICENSE
 *   file that was distributed with this source code.
 */

namespace Befree\Application\Repositories;

use Befree\Database\DatabaseInterface;
use Befree\Repository;

/**
 * Class SettingsRepository
 * @package Befree\Applications\Repositories
 */
class SettingsRepository extends Repository
{

    /**
     * SettingsRepository constructor.
     * @param DatabaseInterface $database
     */
    public function __construct(DatabaseInterface $database)
    {
        parent::__construct($database);
    }
}
