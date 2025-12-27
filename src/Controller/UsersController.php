<?php
namespace App\Controller;

use Cake\Event\EventInterface;

class UsersController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // Penting: Izinkan akses ke halaman login dan logout tanpa sesi
        // Kita matikan auto-render layout default CakePHP untuk halaman login
        // agar desain kita tidak bertabrakan.
    }

    public function login()
    {
        // Gunakan layout khusus 'login' (nanti kita buat di langkah 5)
        $this->viewBuilder()->setLayout('login_layout');

        if ($this->request->is('post')) {
            $username = $this->request->getData('username');
            $password = $this->request->getData('password');

            // Cari user di database
            $user = $this->getTableLocator()->get('Users')->find()
                ->where(['username' => $username])
                ->first();

            // Verifikasi Password Hash
            if ($user && password_verify($password, $user->password)) {
                // Set Session manual
                $session = $this->request->getSession();
                $session->write('User.id', $user->id);
                $session->write('User.username', $user->username);
                $session->write('User.fullname', $user->fullname);
                
                // Regenerasi ID Session (Keamanan Wajib Tugas)
                $session->renew();

                return $this->redirect(['action' => 'dashboard']);
            }
            
            $this->Flash->error('Username atau Password salah!');
        }
    }

    public function dashboard()
    {
        // Cek apakah sudah login
        $session = $this->request->getSession();
        if (!$session->check('User.id')) {
            return $this->redirect(['action' => 'login']);
        }

        // Kirim data sesi ke View
        $this->set('userData', $session->read('User'));
        
        // Gunakan layout default tapi nanti kita styling
        $this->viewBuilder()->setLayout('default'); 
    }

    public function logout()
    {
        $this->request->getSession()->destroy();
        return $this->redirect(['action' => 'login']);
    }
}