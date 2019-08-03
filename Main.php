<?php

namespace TestPlugin;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\{Command, CommandSender};

class Main extends PluginBase {

    public function onEnable(){
    }

    public function onCommand(CommandSender $player, Command $cmd, string $label, array $args) :bool
          if($cmd->getName() === "welcome"){
              if(count($args) === 0){
                  $player->sendMessage("Just Type : /welcome <value>");
                  } else {
                      if(count($args) === 1){
                           switch($args[0]){
                               case "1":
                                 $player->sendMessage("Please Type : /cmdslist For Help");
                                 $player->addTitle("BedrockPlay Network", "play.vixikhd.gq");
                                 break;

                               case "2":
                                 $player->sendMessage("This server is beta ");
                                 break;

                               case "3":
                                 $player->addTitle("This is a Mini-Game Server", "Test");

                           }
                      }
                  }
              }
          }
        switch($cmd->getName()){
        case "welcome":
         if($player instanceof Player){
             if($player->hasPermission)("use.text")){
             $player->sendMessage("Hello Player! Welcome to the server!!");
             }
         }
         break;

         case "heal":
             if($player instanceof Player){
                 if($player->hasPermission)("use.heal")){
                 $player->sendMessage("(!) You Have Been Healed Fully!");
                 $player->setHealth(20);
                 $player->setFood(20);
             }
             break;
         }
        return true;

     }