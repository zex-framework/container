<?php
/**
 * MIT License
 * 
 * Copyright (c) 2022 Nicholas English
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Zex\Container;

use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    /**
     * Construct a new psr-11 compliant container.
     *
     * @param \Zex\Container\ContainerBuilderInterface The container builder.
     *
     * @return void Returns nothing.
     */
    public function __construct(public ContainerBuilderInterface $containerBuilder)
    {
        //
    }
  
    /**
     * Attempt to retrieve an entry from the identifier.
     *
     * @param string $id The identifier to retrieve.
     *
     * @return mixed Returns the entry associated with the identifier.
     */
    public function get(string $id): mixed
    {
        return $this->containerBuilder->get($id);
    }

    /**
     * Check to see if the identifier exists in the container builder.
     *
     * @param string $id The identifier to check.
     *
     * @return bool Returns true if the identifier exists in the container builder or else false.
     */
    public function has($id): bool
    {
        return $this->containerBuilder->has($id);
    }
}
