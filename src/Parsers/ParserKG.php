<?php
class ParserKG extends Parser
{
  protected function getDomainRegExp()
  {
    return "/^domain (.+) \(.+\)$/im";
  }

  protected function getStatusRegExp()
  {
    return "/^domain .+ \((.+)\)$/im";
  }

  protected function getNameServersRegExp()
  {
    return "/name servers in the listed order:(.+)/is";
  }

  protected function getNameServers()
  {
    return $this->getNameServersFromExplode("\n");
  }
}
