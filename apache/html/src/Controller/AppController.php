<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        
        /*
         * ログイン機能（AuthComponent）
         */
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',[
            'authenticate' => [
                'Form' => [
                    'userModel' => 'users', //認証に使うモデル（テーブル）の指定
                    'fields' => [ // ユーザー名とパスワードに使うカラムの指定。省略した場合はusernameとpasswordになる
                    'username' => 'username',
                    'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [ //ログインを行う画面
              'controller' => 'Login',
              'action' => 'index'
            ],
            'loginRedirect' => [ //ログイン後表示される画面
                'controller' => 'Home',
                'action' => 'index'
            ],
            'logoutRedirect' => [ //ログアウト後表示される画面
                'controller' => 'Indexes',
                'action' => 'index',
                'home'
            ],
            'unauthorizedRedirect' => $this->referer() // 未認証時、元のページを返します。
        ]);
    }
    
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(); //一旦すべて許可、下層で拒否
    }
    
}
