<?php
    class TCLRemote extends IPSModule
    {
        /**
         * Log Message
         * @param string $Message
         */
        protected function Log($Message)
        {
            IPS_LogMessage(__CLASS__, $Message);
        }
        
        /**
         * Create
         */        
        public function Create()
        {
            //Never delete this line!
            parent::Create();
               
            $this->RegisterPropertyString("IPAddress", "192.168.1.100"); 
            $this->RegisterPropertyInteger("Port", "4123"); 
        }
        
        /**
         * ApplyChanges
         */
        public function ApplyChanges()
        {
            //Never delete this line!
            parent::ApplyChanges();        
            
            $this->RegisterScript("PowerOff", "Power Off", "<? TCL_PowerOff(".$this->InstanceID.");", 0);
            $this->RegisterScript("VolumeUP", "Volume Up", "<? TCL_VolumeUP(".$this->InstanceID.");", 1);
            $this->RegisterScript("VolumeDOWN", "Volume Down", "<? TCL_VolumeDown(".$this->InstanceID.");", 2);
            $this->RegisterScript("Mute", "Mute", "<? TCL_Mute(".$this->InstanceID.");", 3);
            $this->RegisterScript("ChannelUP", "Channel Up", "<? TCL_ChannelUp(".$this->InstanceID.");", 4);
            $this->RegisterScript("ChannelDOWN", "Channel Down", "<? TCL_ChannelDown(".$this->InstanceID.");", 5);
            $this->RegisterScript("ChannelList", "Channel List", "<? TCL_ChannelList(".$this->InstanceID.");", 6);
            $this->RegisterScript("Up", "Up", "<? TCL_Up(".$this->InstanceID.");", 7);
            $this->RegisterScript("Down", "Down", "<? TCL_Down(".$this->InstanceID.");", 8);
            $this->RegisterScript("OK", "OK", "<? TCL_OK(".$this->InstanceID.");", 9);
        }
        
        protected function SendKeyCode($KeyCode)
        {
            $ch=fsockopen($this->ReadPropertyString('IPAddress'), $this->ReadPropertyInteger('Port'), $errno, $errstr, 1);
            if($ch)
            {
                fwrite($ch, "<?xml version=\"1.0\" encoding=\"utf-8\"?><root><action name=\"setKey\" eventAction=\"TR_DOWN\" keyCode=\"$KeyCode\" /></root>");
                fclose($ch);
            }
        }

        /*
         * TCL_PowerOff
         */
        public function PowerOff()
        {
            $this->SendKeyCode("TR_KEY_POWER");
        }

        /*
         * TCL_VolumeUp
         */
        public function VolumeUp()
        {
            $this->SendKeyCode("TR_KEY_VOL_UP");
        }
 
        /*
         * TCL_VolumeDown
         */
        public function VolumeDown()
        {
            $this->SendKeyCode("TR_KEY_VOL_DOWN");
        }
        
        /*
         * TCL_Mute
         */
        public function Mute()
        {
            $this->SendKeyCode("TR_KEY_MUTE");
        }

        /*
         * TCL_ChannelUp
         */
        public function ChannelUp()
        {
            $this->SendKeyCode("TR_KEY_CH_UP");
        }
        
        /*
         * TCL_ChannelDown
         */
        public function ChannelDown()
        {
            $this->SendKeyCode("TR_KEY_CH_DOWN");
        }  
        
        /*
         * TCL_SendNumber
         * @param string $Number
         */
        public function SendNumber($Number)
        {
            $Num_r = str_split($Number);
            foreach ($Num_r as $Number)
            {
                $this->SendKeyCode("TR_KEY_$Number");
            }
        }

        /*
         * TCL_TV
         */
        public function TV()
        {
            $this->SendKeyCode("TR_KEY_TV");
        }          
 
        /*
         * TCL_Source
         */
        public function Source()
        {
            $this->SendKeyCode("TR_KEY_SOURCE");
        }          
        
        /*
         * TCL_SmartTV
         */
        public function SmartTV()
        {
            $this->SendKeyCode("TR_KEY_SMARTTV");
        } 
        
        /*
         * TCL_UP
         */
        public function Up()
        {
            $this->SendKeyCode("TR_KEY_UP");
        }  
        
        /*
         * TCL_DOWN
         */
        public function Down()
        {
            $this->SendKeyCode("TR_KEY_DOWN");
        }  
        
        /*
         * TCL_Left
         */
        public function Left()
        {
            $this->SendKeyCode("TR_KEY_LEFT");
        }  
        
        /*
         * TCL_Right
         */
        public function Right()
        {
            $this->SendKeyCode("TR_KEY_RIGHT");
        }  
        
        /*
         * TCL_OK
         */
        public function OK()
        {
            $this->SendKeyCode("TR_KEY_OK");
        }
        
        /*
         * TCL_Back
         */
        public function Back()
        {
            $this->SendKeyCode("TR_KEY_BACK");
        }
        
        /*
         * TCL_Red
         */
        public function Red()
        {
            $this->SendKeyCode("TR_KEY_RED");
        }
        
        /*
         * TCL_Green
         */
        public function Green()
        {
            $this->SendKeyCode("TR_KEY_GREEN");
        }
        
        /*
         * TCL_Yellow
         */
        public function Yellow()
        {
            $this->SendKeyCode("TR_KEY_YELLOW");
        }
        
        /*
         * TCL_Blue
         */
        public function Blue()
        {
            $this->SendKeyCode("TR_KEY_BLUE");
        }
        
        /*
         * TCL_Guide
         */
        public function Guide()
        {
            $this->SendKeyCode("TR_KEY_GUIDE");
        }
        
        /*
         * TCL_ChList
         */
        public function ChannelList()
        {
            $this->SendKeyCode("TR_KEY_LIST");
        }
    }