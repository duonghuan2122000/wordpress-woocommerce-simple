<?php
 namespace MailPoetVendor\Symfony\Component\DependencyInjection\Loader\Configurator\Traits; if (!defined('ABSPATH')) exit; use MailPoetVendor\Symfony\Component\DependencyInjection\ChildDefinition; use MailPoetVendor\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException; trait ParentTrait { public final function parent(string $parent) : self { if (!$this->allowParent) { throw new InvalidArgumentException(\sprintf('A parent cannot be defined when either "_instanceof" or "_defaults" are also defined for service prototype "%s".', $this->id)); } if ($this->definition instanceof ChildDefinition) { $this->definition->setParent($parent); } elseif ($this->definition->isAutoconfigured()) { throw new InvalidArgumentException(\sprintf('The service "%s" cannot have a "parent" and also have "autoconfigure". Try disabling autoconfiguration for the service.', $this->id)); } elseif ($this->definition->getBindings()) { throw new InvalidArgumentException(\sprintf('The service "%s" cannot have a "parent" and also "bind" arguments.', $this->id)); } else { $definition = \serialize($this->definition); $definition = \substr_replace($definition, '53', 2, 2); $definition = \substr_replace($definition, 'Child', 44, 0); $definition = \unserialize($definition); $this->definition = $definition->setParent($parent); } return $this; } } 