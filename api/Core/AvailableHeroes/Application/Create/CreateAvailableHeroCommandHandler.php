<?php

declare(strict_types=1);

namespace api\Core\AvailableHeroes\Application\Create;

use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroId;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroName;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroWorld;
use api\core\AvailableHeroes\Domain\ValueObjects\AvailableHeroDescription;
use api\Shared\Domain\ValueObject\Avatar;
use api\Shared\Domain\ValueObject\Boost;
use api\Shared\Domain\ValueObject\Stats;
use api\Shared\Domain\ValueObject\FkId;
use api\Shared\Domain\Bus\command\CommandHandler;
use DateTime;

final class CreateAvailableHeroCommandHandler implements Command
{
    public function __construct()
    {
    }

    public function __invoke(CreateAvailableHeroCommand $command): void
    {
        $id                = new AvailableHeroId($command->id());
        $name              = new AvailableHeroName($command->name());  
        $description       = new AvailableHeroDescription($command->description());          
        $world             = new AvailableHeroWorld($command->world());    
        $avatar            = new Avatar($command->avatar());     
        $avatar_block      = new Avatar($command->avatar_block());           
        $race_id           = new FkId($command->race_id());      
        $rarity_id         = new FkId($command->rarity_id());        
        $nature_id         = new FkId($command->nature_id());        
        $type_id           = new FkId($command->type_id());      
        $attack_min        = new Stats($command->attack_min());         
        $attack_max        = new Stats($command->attack_max());               
        $b_attack_min      = new Boost($command->b_attack_min());             
        $b_attack_max      = new Boost($command->b_attack_max());             
        $defense_min       = new Stats($command->defense_min());             
        $defense_max       = new Stats($command->defense_max());            
        $b_defense_min     = new Boost($command->b_defense_min());              
        $b_defense_max     = new Boost($command->b_defense_max());              
        $hp_min            = new Stats($command->hp_min());       
        $hp_max            = new Stats($command->hp_max());       
        $b_hp_min          = new Boost($command->b_hp_min());         
        $b_hp_max          = new Boost($command->b_hp_max());         
        $sp_attack_min     = new Stats($command->sp_attack_min());              
        $sp_attack_max     = new Stats($command->sp_attack_max());              
        $b_sp_attack_min   = new Boost($command->b_sp_attack_min());                
        $b_sp_attack_max   = new Boost($command->b_sp_attack_max());                
        $sp_defense_min    = new Stats($command->sp_defense_min());               
        $sp_defense_max    = new Stats($command->sp_defense_max());               
        $b_sp_defense_min  = new Boost($command->b_sp_defense_min());                 
        $b_sp_defense_max  = new Boost($command->b_sp_defense_max());                 
        $speed_min         = new Stats($command->speed_min());          
        $speed_max         = new Stats($command->speed_max());          
        $b_speed_min       = new Boost($command->b_speed_min());            
        $b_speed_max       = new Boost($command->b_speed_max());            
        $farming_min       = new Stats($command->farming_min());            
        $farming_max       = new Stats($command->farming_max());            
        $b_farming_min     = new Boost($command->b_farming_min());              
        $b_farming_max     = new Boost($command->b_farming_max());              
        $steeling_min      = new Stats($command->steeling_min());             
        $steeling_max      = new Stats($command->steeling_max());             
        $b_steeling_min    = new Boost($command->b_steeling_min());               
        $b_steeling_max    = new Boost($command->b_steeling_max());                   
        $wooding_min       = new Stats($command->wooding_min());            
        $wooding_max       = new Stats($command->wooding_max());            
        $b_wooding_min     = new Boost($command->b_wooding_min());              
        $b_wooding_max     = new Boost($command->b_wooding_max());              
        $available         = $command->available();
        $created_at        = new DateTime($command->created_at());               
        $updated_at        = new DateTime($command->updated_at());               
        $created_by        = new FkId($command->created_by());          
        $updated_by        = new FkId($command->updated_by());          
    
        $this->creator->create(
            $id,
            $name,
            $description,
            $world,
            $avatar,
            $avatar_block,
            $race_id,
            $rarity_id,
            $nature_id,
            $type_id,
            $attack_min,
            $attack_max,
            $b_attack_min,
            $b_attack_max,
            $defense_min,
            $defense_max,
            $b_defense_min,
            $b_defense_max,
            $hp_min,
            $hp_max,
            $b_hp_min,
            $b_hp_max,
            $sp_attack_min,
            $sp_attack_max,
            $b_sp_attack_min,
            $b_sp_attack_max,
            $sp_defense_min,
            $sp_defense_max,
            $b_sp_defense_min,
            $b_sp_defense_max,
            $speed_min,
            $speed_max,
            $b_speed_min,
            $b_speed_max,
            $farming_min,
            $farming_max,
            $b_farming_min,
            $b_farming_max,
            $steeling_min,
            $steeling_max,
            $b_steeling_min,
            $b_steeling_max,
            $wooding_min,
            $wooding_max,
            $b_wooding_min,
            $b_wooding_max,
            $available,
            $created_at,
            $updated_at,
            $created_by,
            $updated_by,
        );
    }
}