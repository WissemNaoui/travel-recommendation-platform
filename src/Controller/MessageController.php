// src/Controller/MessageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MessageController extends AbstractController
{
    /**
     * @Route("/message", name="message_index")
     */
    public function index(): Response
    {
        // Placeholder for fetching messages
        return new Response('<html><body>Message Controller Index Page</body></html>');
    }

    /**
     * @Route("/message/show/{id}", name="message_show")
     */
    public function show($id): Response
    {
        // Placeholder for showing a specific message
        return new Response("<html><body>Showing Message with ID: $id</body></html>");
    }

    /**
     * @Route("/message/create", name="message_create")
     */
    public function create(): Response
    {
        // Placeholder for creating a new message
        return new Response('<html><body>Create a new message</body></html>');
    }
}
