
Design Patterns in the Code
Facade (DeliveryFacade)
The Facade pattern simplifies the usage of a complex subsystem by providing a unified interface. In our case, DeliveryFacade hides the complexity of interacting with different delivery services, such as NovaPoshtaService and UkrPoshtaService. It offers a simple interface for sending data.

Factory Method
The Factory Method pattern is employed to create subclass objects within a base class. In the DeliveryService, the getDeliveryService() method serves as a factory method, enabling subclasses like NovaPoshtaService and UkrPoshtaService to create objects for connecting to specific delivery services (NovaPoshtaConnector or UkrPoshtaConnector).

Interactions in the Code
DeliveryFacade Request Handling:
DeliveryFacade receives a request to send data to a specific delivery service.
Invocation of Delivery Service Method:
DeliveryFacade calls the post() method of the corresponding delivery service, such as NovaPoshtaService or UkrPoshtaService.
Factory Method Usage in Delivery Services:
In the respective delivery service (NovaPoshtaService or UkrPoshtaService), the factory method getDeliveryService() is invoked to create an object for connecting to the specific delivery service (NovaPoshtaConnector or UkrPoshtaConnector).
Order Creation Request:
The connection to the specific delivery service executes a request to create an order.