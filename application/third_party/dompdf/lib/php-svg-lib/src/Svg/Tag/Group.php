<?php
/**
 * @package php-svg-lib
 * @link    http://github.com/PhenX/php-svg-lib
 * @author  Fabien M�nager <fabien.menager@gmail.com>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */

namespace Svg\Tag;

class Group extends AbstractTag
{
    protected function before($attributes)
    {
        $surface = $this->document->getSurface();

        $surface->save();

        $style = $this->makeStyle($attributes);

        $this->setStyle($style);
        $surface->setStyle($style);

        $this->applyTransform($attributes);
    }

    protected function after()
    {
        $this->document->getSurface()->restore();
    }
} 