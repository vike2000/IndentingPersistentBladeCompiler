<?php

namespace PrinsFrank\IndentingPersistentBladeCompiler\Tests\Unit\Compilers\Concerns;

use PrinsFrank\IndentingPersistentBladeCompiler\Tests\Unit\Compilers\AbstractBladeTestCase;

class BladeYieldTest extends AbstractBladeTestCase
{
    public function testYieldsAreCompiled()
    {
        $this->assertEquals('<?php echo $__env->yieldContent(\'foo\', \'\'); ?>', $this->compiler->compileString('@yield(\'foo\')'));
        $this->assertEquals('    <?php echo $__env->yieldContent(\'foo\', \'    \'); ?>', $this->compiler->compileString('    @yield(\'foo\')'));
        $this->assertEquals('<?php echo $__env->yieldContent(\'foo\', \'bar\', \'\'); ?>', $this->compiler->compileString('@yield(\'foo\', \'bar\')'));
        $this->assertEquals('    <?php echo $__env->yieldContent(\'foo\', \'bar\', \'    \'); ?>', $this->compiler->compileString('    @yield(\'foo\', \'bar\')'));
        $this->assertEquals('<?php echo $__env->yieldContent(name(foo), \'\'); ?>', $this->compiler->compileString('@yield(name(foo))'));
        $this->assertEquals('    <?php echo $__env->yieldContent(name(foo), \'    \'); ?>', $this->compiler->compileString('    @yield(name(foo))'));
    }
}
