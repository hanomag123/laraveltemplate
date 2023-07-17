<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel 10.15.0 on 2023-07-17.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */
namespace  {
    exit("This file should not be included, only analyzed by your IDE");
}

namespace Illuminate\Support\Facades { 

    class App {
        
        /**
         * Get the version number of the application.
         *
         * @return string 
         * @static 
         */ 
        public static function version()
        {
            return \Illuminate\Foundation\Application::version();
        }
        
        /**
         * Run the given array of bootstrap classes.
         *
         * @param string[] $bootstrappers
         * @return void 
         * @static 
         */ 
        public static function bootstrapWith($bootstrappers)
        {
            \Illuminate\Foundation\Application::bootstrapWith($bootstrappers);
        }
        
        /**
         * Register a callback to run after loading the environment.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterLoadingEnvironment($callback)
        {
            \Illuminate\Foundation\Application::afterLoadingEnvironment($callback);
        }
        
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function beforeBootstrapping($bootstrapper, $callback)
        {
            \Illuminate\Foundation\Application::beforeBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string $bootstrapper
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function afterBootstrapping($bootstrapper, $callback)
        {
            \Illuminate\Foundation\Application::afterBootstrapping($bootstrapper, $callback);
        }
        
        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasBeenBootstrapped()
        {
            return \Illuminate\Foundation\Application::hasBeenBootstrapped();
        }
        
        /**
         * Set the base path for the application.
         *
         * @param string $basePath
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function setBasePath($basePath)
        {
            return \Illuminate\Foundation\Application::setBasePath($basePath);
        }
        
        /**
         * Get the path to the application "app" directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function path($path = '')
        {
            return \Illuminate\Foundation\Application::path($path);
        }
        
        /**
         * Set the application directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useAppPath($path)
        {
            return \Illuminate\Foundation\Application::useAppPath($path);
        }
        
        /**
         * Get the base path of the Laravel installation.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function basePath($path = '')
        {
            return \Illuminate\Foundation\Application::basePath($path);
        }
        
        /**
         * Get the path to the bootstrap directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function bootstrapPath($path = '')
        {
            return \Illuminate\Foundation\Application::bootstrapPath($path);
        }
        
        /**
         * Set the bootstrap file directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useBootstrapPath($path)
        {
            return \Illuminate\Foundation\Application::useBootstrapPath($path);
        }
        
        /**
         * Get the path to the application configuration files.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function configPath($path = '')
        {
            return \Illuminate\Foundation\Application::configPath($path);
        }
        
        /**
         * Set the configuration directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useConfigPath($path)
        {
            return \Illuminate\Foundation\Application::useConfigPath($path);
        }
        
        /**
         * Get the path to the database directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function databasePath($path = '')
        {
            return \Illuminate\Foundation\Application::databasePath($path);
        }
        
        /**
         * Set the database directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useDatabasePath($path)
        {
            return \Illuminate\Foundation\Application::useDatabasePath($path);
        }
        
        /**
         * Get the path to the language files.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function langPath($path = '')
        {
            return \Illuminate\Foundation\Application::langPath($path);
        }
        
        /**
         * Set the language file directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useLangPath($path)
        {
            return \Illuminate\Foundation\Application::useLangPath($path);
        }
        
        /**
         * Get the path to the public / web directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function publicPath($path = '')
        {
            return \Illuminate\Foundation\Application::publicPath($path);
        }
        
        /**
         * Set the public / web directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function usePublicPath($path)
        {
            return \Illuminate\Foundation\Application::usePublicPath($path);
        }
        
        /**
         * Get the path to the storage directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function storagePath($path = '')
        {
            return \Illuminate\Foundation\Application::storagePath($path);
        }
        
        /**
         * Set the storage directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useStoragePath($path)
        {
            return \Illuminate\Foundation\Application::useStoragePath($path);
        }
        
        /**
         * Get the path to the resources directory.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function resourcePath($path = '')
        {
            return \Illuminate\Foundation\Application::resourcePath($path);
        }
        
        /**
         * Get the path to the views directory.
         * 
         * This method returns the first configured path in the array of view paths.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function viewPath($path = '')
        {
            return \Illuminate\Foundation\Application::viewPath($path);
        }
        
        /**
         * Join the given paths together.
         *
         * @param string $basePath
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function joinPaths($basePath, $path = '')
        {
            return \Illuminate\Foundation\Application::joinPaths($basePath, $path);
        }
        
        /**
         * Get the path to the environment file directory.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentPath()
        {
            return \Illuminate\Foundation\Application::environmentPath();
        }
        
        /**
         * Set the directory for the environment file.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function useEnvironmentPath($path)
        {
            return \Illuminate\Foundation\Application::useEnvironmentPath($path);
        }
        
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param string $file
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function loadEnvironmentFrom($file)
        {
            return \Illuminate\Foundation\Application::loadEnvironmentFrom($file);
        }
        
        /**
         * Get the environment file the application is using.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFile()
        {
            return \Illuminate\Foundation\Application::environmentFile();
        }
        
        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string 
         * @static 
         */ 
        public static function environmentFilePath()
        {
            return \Illuminate\Foundation\Application::environmentFilePath();
        }
        
        /**
         * Get or check the current application environment.
         *
         * @param string|array $environments
         * @return string|bool 
         * @static 
         */ 
        public static function environment(...$environments)
        {
            return \Illuminate\Foundation\Application::environment(...$environments);
        }
        
        /**
         * Determine if the application is in the local environment.
         *
         * @return bool 
         * @static 
         */ 
        public static function isLocal()
        {
            return \Illuminate\Foundation\Application::isLocal();
        }
        
        /**
         * Determine if the application is in the production environment.
         *
         * @return bool 
         * @static 
         */ 
        public static function isProduction()
        {
            return \Illuminate\Foundation\Application::isProduction();
        }
        
        /**
         * Detect the application's current environment.
         *
         * @param \Closure $callback
         * @return string 
         * @static 
         */ 
        public static function detectEnvironment($callback)
        {
            return \Illuminate\Foundation\Application::detectEnvironment($callback);
        }
        
        /**
         * Determine if the application is running in the console.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningInConsole()
        {
            return \Illuminate\Foundation\Application::runningInConsole();
        }
        
        /**
         * Determine if the application is running unit tests.
         *
         * @return bool 
         * @static 
         */ 
        public static function runningUnitTests()
        {
            return \Illuminate\Foundation\Application::runningUnitTests();
        }
        
        /**
         * Determine if the application is running with debug mode enabled.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasDebugModeEnabled()
        {
            return \Illuminate\Foundation\Application::hasDebugModeEnabled();
        }
        
        /**
         * Register all of the configured providers.
         *
         * @return void 
         * @static 
         */ 
        public static function registerConfiguredProviders()
        {
            \Illuminate\Foundation\Application::registerConfiguredProviders();
        }
        
        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function register($provider, $force = false)
        {
            return \Illuminate\Foundation\Application::register($provider, $force);
        }
        
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return \Illuminate\Support\ServiceProvider|null 
         * @static 
         */ 
        public static function getProvider($provider)
        {
            return \Illuminate\Foundation\Application::getProvider($provider);
        }
        
        /**
         * Get the registered service provider instances if any exist.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @return array 
         * @static 
         */ 
        public static function getProviders($provider)
        {
            return \Illuminate\Foundation\Application::getProviders($provider);
        }
        
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param string $provider
         * @return \Illuminate\Support\ServiceProvider 
         * @static 
         */ 
        public static function resolveProvider($provider)
        {
            return \Illuminate\Foundation\Application::resolveProvider($provider);
        }
        
        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProviders()
        {
            \Illuminate\Foundation\Application::loadDeferredProviders();
        }
        
        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @return void 
         * @static 
         */ 
        public static function loadDeferredProvider($service)
        {
            \Illuminate\Foundation\Application::loadDeferredProvider($service);
        }
        
        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string|null $service
         * @return void 
         * @static 
         */ 
        public static function registerDeferredProvider($provider, $service = null)
        {
            \Illuminate\Foundation\Application::registerDeferredProvider($provider, $service);
        }
        
        /**
         * Resolve the given type from the container.
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed 
         * @static 
         */ 
        public static function make($abstract, $parameters = [])
        {
            return \Illuminate\Foundation\Application::make($abstract, $parameters);
        }
        
        /**
         * Determine if the given abstract type has been bound.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function bound($abstract)
        {
            return \Illuminate\Foundation\Application::bound($abstract);
        }
        
        /**
         * Determine if the application has booted.
         *
         * @return bool 
         * @static 
         */ 
        public static function isBooted()
        {
            return \Illuminate\Foundation\Application::isBooted();
        }
        
        /**
         * Boot the application's service providers.
         *
         * @return void 
         * @static 
         */ 
        public static function boot()
        {
            \Illuminate\Foundation\Application::boot();
        }
        
        /**
         * Register a new boot listener.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function booting($callback)
        {
            \Illuminate\Foundation\Application::booting($callback);
        }
        
        /**
         * Register a new "booted" listener.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function booted($callback)
        {
            \Illuminate\Foundation\Application::booted($callback);
        }
        
        /**
         * {@inheritdoc}
         *
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */ 
        public static function handle($request, $type = 1, $catch = true)
        {
            return \Illuminate\Foundation\Application::handle($request, $type, $catch);
        }
        
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool 
         * @static 
         */ 
        public static function shouldSkipMiddleware()
        {
            return \Illuminate\Foundation\Application::shouldSkipMiddleware();
        }
        
        /**
         * Get the path to the cached services.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedServicesPath()
        {
            return \Illuminate\Foundation\Application::getCachedServicesPath();
        }
        
        /**
         * Get the path to the cached packages.php file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedPackagesPath()
        {
            return \Illuminate\Foundation\Application::getCachedPackagesPath();
        }
        
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function configurationIsCached()
        {
            return \Illuminate\Foundation\Application::configurationIsCached();
        }
        
        /**
         * Get the path to the configuration cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedConfigPath()
        {
            return \Illuminate\Foundation\Application::getCachedConfigPath();
        }
        
        /**
         * Determine if the application routes are cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function routesAreCached()
        {
            return \Illuminate\Foundation\Application::routesAreCached();
        }
        
        /**
         * Get the path to the routes cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedRoutesPath()
        {
            return \Illuminate\Foundation\Application::getCachedRoutesPath();
        }
        
        /**
         * Determine if the application events are cached.
         *
         * @return bool 
         * @static 
         */ 
        public static function eventsAreCached()
        {
            return \Illuminate\Foundation\Application::eventsAreCached();
        }
        
        /**
         * Get the path to the events cache file.
         *
         * @return string 
         * @static 
         */ 
        public static function getCachedEventsPath()
        {
            return \Illuminate\Foundation\Application::getCachedEventsPath();
        }
        
        /**
         * Add new prefix to list of absolute path prefixes.
         *
         * @param string $prefix
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function addAbsoluteCachePathPrefix($prefix)
        {
            return \Illuminate\Foundation\Application::addAbsoluteCachePathPrefix($prefix);
        }
        
        /**
         * Get an instance of the maintenance mode manager implementation.
         *
         * @return \Illuminate\Contracts\Foundation\MaintenanceMode 
         * @static 
         */ 
        public static function maintenanceMode()
        {
            return \Illuminate\Foundation\Application::maintenanceMode();
        }
        
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool 
         * @static 
         */ 
        public static function isDownForMaintenance()
        {
            return \Illuminate\Foundation\Application::isDownForMaintenance();
        }
        
        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return \Illuminate\Foundation\never 
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
         * @static 
         */ 
        public static function abort($code, $message = '', $headers = [])
        {
            return \Illuminate\Foundation\Application::abort($code, $message, $headers);
        }
        
        /**
         * Register a terminating callback with the application.
         *
         * @param callable|string $callback
         * @return \Illuminate\Foundation\Application 
         * @static 
         */ 
        public static function terminating($callback)
        {
            return \Illuminate\Foundation\Application::terminating($callback);
        }
        
        /**
         * Terminate the application.
         *
         * @return void 
         * @static 
         */ 
        public static function terminate()
        {
            \Illuminate\Foundation\Application::terminate();
        }
        
        /**
         * Get the service providers that have been loaded.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoadedProviders()
        {
            return \Illuminate\Foundation\Application::getLoadedProviders();
        }
        
        /**
         * Determine if the given service provider is loaded.
         *
         * @param string $provider
         * @return bool 
         * @static 
         */ 
        public static function providerIsLoaded($provider)
        {
            return \Illuminate\Foundation\Application::providerIsLoaded($provider);
        }
        
        /**
         * Get the application's deferred services.
         *
         * @return array 
         * @static 
         */ 
        public static function getDeferredServices()
        {
            return \Illuminate\Foundation\Application::getDeferredServices();
        }
        
        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function setDeferredServices($services)
        {
            \Illuminate\Foundation\Application::setDeferredServices($services);
        }
        
        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @return void 
         * @static 
         */ 
        public static function addDeferredServices($services)
        {
            \Illuminate\Foundation\Application::addDeferredServices($services);
        }
        
        /**
         * Determine if the given service is a deferred service.
         *
         * @param string $service
         * @return bool 
         * @static 
         */ 
        public static function isDeferredService($service)
        {
            return \Illuminate\Foundation\Application::isDeferredService($service);
        }
        
        /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function provideFacades($namespace)
        {
            \Illuminate\Foundation\Application::provideFacades($namespace);
        }
        
        /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            return \Illuminate\Foundation\Application::getLocale();
        }
        
        /**
         * Get the current application locale.
         *
         * @return string 
         * @static 
         */ 
        public static function currentLocale()
        {
            return \Illuminate\Foundation\Application::currentLocale();
        }
        
        /**
         * Get the current application fallback locale.
         *
         * @return string 
         * @static 
         */ 
        public static function getFallbackLocale()
        {
            return \Illuminate\Foundation\Application::getFallbackLocale();
        }
        
        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {
            \Illuminate\Foundation\Application::setLocale($locale);
        }
        
        /**
         * Set the current application fallback locale.
         *
         * @param string $fallbackLocale
         * @return void 
         * @static 
         */ 
        public static function setFallbackLocale($fallbackLocale)
        {
            \Illuminate\Foundation\Application::setFallbackLocale($fallbackLocale);
        }
        
        /**
         * Determine if the application locale is the given locale.
         *
         * @param string $locale
         * @return bool 
         * @static 
         */ 
        public static function isLocale($locale)
        {
            return \Illuminate\Foundation\Application::isLocale($locale);
        }
        
        /**
         * Register the core class aliases in the container.
         *
         * @return void 
         * @static 
         */ 
        public static function registerCoreContainerAliases()
        {
            \Illuminate\Foundation\Application::registerCoreContainerAliases();
        }
        
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Foundation\Application::flush();
        }
        
        /**
         * Get the application namespace.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function getNamespace()
        {
            return \Illuminate\Foundation\Application::getNamespace();
        }
        
        /**
         * Define a contextual binding.
         *
         * @param array|string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder 
         * @static 
         */ 
        public static function when($concrete)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::when($concrete);
        }
        
        /**
         * Returns true if the container can return an entry for the given identifier.
         * 
         * Returns false otherwise.
         * 
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @return bool 
         * @param string $id Identifier of the entry to look for.
         * @return bool 
         * @static 
         */ 
        public static function has($id)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::has($id);
        }
        
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function resolved($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::resolved($abstract);
        }
        
        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool 
         * @static 
         */ 
        public static function isShared($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isShared($abstract);
        }
        
        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function isAlias($name)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::isAlias($name);
        }
        
        /**
         * Register a binding with the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @throws \TypeError
         * @static 
         */ 
        public static function bind($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bind($abstract, $concrete, $shared);
        }
        
        /**
         * Determine if the container has a method binding.
         *
         * @param string $method
         * @return bool 
         * @static 
         */ 
        public static function hasMethodBinding($method)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::hasMethodBinding($method);
        }
        
        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param array|string $method
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function bindMethod($method, $callback)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bindMethod($method, $callback);
        }
        
        /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function callMethodBinding($method, $instance)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::callMethodBinding($method, $instance);
        }
        
        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @return void 
         * @static 
         */ 
        public static function addContextualBinding($concrete, $abstract, $implementation)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::addContextualBinding($concrete, $abstract, $implementation);
        }
        
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void 
         * @static 
         */ 
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::bindIf($abstract, $concrete, $shared);
        }
        
        /**
         * Register a shared binding in the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function singleton($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::singleton($abstract, $concrete);
        }
        
        /**
         * Register a shared binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function singletonIf($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::singletonIf($abstract, $concrete);
        }
        
        /**
         * Register a scoped binding in the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function scoped($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::scoped($abstract, $concrete);
        }
        
        /**
         * Register a scoped binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void 
         * @static 
         */ 
        public static function scopedIf($abstract, $concrete = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::scopedIf($abstract, $concrete);
        }
        
        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function extend($abstract, $closure)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::extend($abstract, $closure);
        }
        
        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return mixed 
         * @static 
         */ 
        public static function instance($abstract, $instance)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::instance($abstract, $instance);
        }
        
        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void 
         * @static 
         */ 
        public static function tag($abstracts, $tags)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::tag($abstracts, $tags);
        }
        
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return \Illuminate\Container\iterable 
         * @static 
         */ 
        public static function tagged($tag)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::tagged($tag);
        }
        
        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void 
         * @throws \LogicException
         * @static 
         */ 
        public static function alias($abstract, $alias)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::alias($abstract, $alias);
        }
        
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function rebinding($abstract, $callback)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::rebinding($abstract, $callback);
        }
        
        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed 
         * @static 
         */ 
        public static function refresh($abstract, $target, $method)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::refresh($abstract, $target, $method);
        }
        
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure 
         * @static 
         */ 
        public static function wrap($callback, $parameters = [])
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::wrap($callback, $parameters);
        }
        
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array<string, mixed> $parameters
         * @param string|null $defaultMethod
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function call($callback, $parameters = [], $defaultMethod = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::call($callback, $parameters, $defaultMethod);
        }
        
        /**
         * Get a closure to resolve the given type from the container.
         *
         * @param string $abstract
         * @return \Closure 
         * @static 
         */ 
        public static function factory($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::factory($abstract);
        }
        
        /**
         * An alias function name for make().
         *
         * @param string|callable $abstract
         * @param array $parameters
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */ 
        public static function makeWith($abstract, $parameters = [])
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::makeWith($abstract, $parameters);
        }
        
        /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @return mixed 
         * @param string $id Identifier of the entry to look for.
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @return mixed Entry.
         * @static 
         */ 
        public static function get($id)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::get($id);
        }
        
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param \Closure|string $concrete
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @throws \Illuminate\Contracts\Container\CircularDependencyException
         * @static 
         */ 
        public static function build($concrete)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::build($concrete);
        }
        
        /**
         * Register a new before resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function beforeResolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::beforeResolving($abstract, $callback);
        }
        
        /**
         * Register a new resolving callback.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function resolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::resolving($abstract, $callback);
        }
        
        /**
         * Register a new after resolving callback for all types.
         *
         * @param \Closure|string $abstract
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function afterResolving($abstract, $callback = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::afterResolving($abstract, $callback);
        }
        
        /**
         * Get the container's bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getBindings()
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getBindings();
        }
        
        /**
         * Get the alias for an abstract if available.
         *
         * @param string $abstract
         * @return string 
         * @static 
         */ 
        public static function getAlias($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getAlias($abstract);
        }
        
        /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetExtenders($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetExtenders($abstract);
        }
        
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void 
         * @static 
         */ 
        public static function forgetInstance($abstract)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetInstance($abstract);
        }
        
        /**
         * Clear all of the instances from the container.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetInstances()
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetInstances();
        }
        
        /**
         * Clear all of the scoped instances from the container.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetScopedInstances()
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::forgetScopedInstances();
        }
        
        /**
         * Get the globally available instance of the container.
         *
         * @return static 
         * @static 
         */ 
        public static function getInstance()
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::getInstance();
        }
        
        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container|null $container
         * @return \Illuminate\Contracts\Container\Container|static 
         * @static 
         */ 
        public static function setInstance($container = null)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::setInstance($container);
        }
        
        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetExists($key);
        }
        
        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            return \Illuminate\Foundation\Application::offsetGet($key);
        }
        
        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::offsetSet($key, $value);
        }
        
        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            //Method inherited from \Illuminate\Container\Container            
            \Illuminate\Foundation\Application::offsetUnset($key);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Foundation\Application::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Foundation\Application::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Foundation\Application::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Foundation\Application::flushMacros();
        }
         
    }

    class Artisan {
        
        /**
         * Re-route the Symfony command events to their Laravel counterparts.
         *
         * @internal 
         * @return \App\Console\Kernel 
         * @static 
         */ 
        public static function rerouteSymfonyCommandEvents()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::rerouteSymfonyCommandEvents();
        }
        
        /**
         * Run the console application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param \Symfony\Component\Console\Output\OutputInterface|null $output
         * @return int 
         * @static 
         */ 
        public static function handle($input, $output = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::handle($input, $output);
        }
        
        /**
         * Terminate the application.
         *
         * @param \Symfony\Component\Console\Input\InputInterface $input
         * @param int $status
         * @return void 
         * @static 
         */ 
        public static function terminate($input, $status)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::terminate($input, $status);
        }
        
        /**
         * Register a callback to be invoked when the command lifecycle duration exceeds a given amount of time.
         *
         * @param \DateTimeInterface|\Carbon\CarbonInterval|float|int $threshold
         * @param callable $handler
         * @return void 
         * @static 
         */ 
        public static function whenCommandLifecycleIsLongerThan($threshold, $handler)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::whenCommandLifecycleIsLongerThan($threshold, $handler);
        }
        
        /**
         * When the command being handled started.
         *
         * @return \Illuminate\Support\Carbon|null 
         * @static 
         */ 
        public static function commandStartedAt()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::commandStartedAt();
        }
        
        /**
         * Register a Closure based command with the application.
         *
         * @param string $signature
         * @param \Closure $callback
         * @return \Illuminate\Foundation\Console\ClosureCommand 
         * @static 
         */ 
        public static function command($signature, $callback)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::command($signature, $callback);
        }
        
        /**
         * Register the given command with the console application.
         *
         * @param \Symfony\Component\Console\Command\Command $command
         * @return void 
         * @static 
         */ 
        public static function registerCommand($command)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::registerCommand($command);
        }
        
        /**
         * Run an Artisan console command by name.
         *
         * @param string $command
         * @param array $parameters
         * @param \Symfony\Component\Console\Output\OutputInterface|null $outputBuffer
         * @return int 
         * @throws \Symfony\Component\Console\Exception\CommandNotFoundException
         * @static 
         */ 
        public static function call($command, $parameters = [], $outputBuffer = null)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::call($command, $parameters, $outputBuffer);
        }
        
        /**
         * Queue the given console command.
         *
         * @param string $command
         * @param array $parameters
         * @return \Illuminate\Foundation\Bus\PendingDispatch 
         * @static 
         */ 
        public static function queue($command, $parameters = [])
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::queue($command, $parameters);
        }
        
        /**
         * Get all of the commands registered with the console.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::all();
        }
        
        /**
         * Get the output for the last run command.
         *
         * @return string 
         * @static 
         */ 
        public static function output()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            return \App\Console\Kernel::output();
        }
        
        /**
         * Bootstrap the application for artisan commands.
         *
         * @return void 
         * @static 
         */ 
        public static function bootstrap()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::bootstrap();
        }
        
        /**
         * Bootstrap the application without booting service providers.
         *
         * @return void 
         * @static 
         */ 
        public static function bootstrapWithoutBootingProviders()
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::bootstrapWithoutBootingProviders();
        }
        
        /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application|null $artisan
         * @return void 
         * @static 
         */ 
        public static function setArtisan($artisan)
        {
            //Method inherited from \Illuminate\Foundation\Console\Kernel            
            \App\Console\Kernel::setArtisan($artisan);
        }
         
    }

    class Auth {
        
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */ 
        public static function guard($name = null)
        {
            return \Illuminate\Auth\AuthManager::guard($name);
        }
        
        /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function createSessionDriver($name, $config)
        {
            return \Illuminate\Auth\AuthManager::createSessionDriver($name, $config);
        }
        
        /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard 
         * @static 
         */ 
        public static function createTokenDriver($name, $config)
        {
            return \Illuminate\Auth\AuthManager::createTokenDriver($name, $config);
        }
        
        /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }
        
        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function shouldUse($name)
        {
            \Illuminate\Auth\AuthManager::shouldUse($name);
        }
        
        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }
        
        /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function viaRequest($driver, $callback)
        {
            return \Illuminate\Auth\AuthManager::viaRequest($driver, $callback);
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function userResolver()
        {
            return \Illuminate\Auth\AuthManager::userResolver();
        }
        
        /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function resolveUsersUsing($userResolver)
        {
            return \Illuminate\Auth\AuthManager::resolveUsersUsing($userResolver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }
        
        /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function provider($name, $callback)
        {
            return \Illuminate\Auth\AuthManager::provider($name, $callback);
        }
        
        /**
         * Determines if any guards have already been resolved.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasResolvedGuards()
        {
            return \Illuminate\Auth\AuthManager::hasResolvedGuards();
        }
        
        /**
         * Forget all of the resolved guard instances.
         *
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function forgetGuards()
        {
            return \Illuminate\Auth\AuthManager::forgetGuards();
        }
        
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */ 
        public static function setApplication($app)
        {
            return \Illuminate\Auth\AuthManager::setApplication($app);
        }
        
        /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
         * @return \Illuminate\Contracts\Auth\UserProvider|null 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function createUserProvider($provider = null)
        {
            return \Illuminate\Auth\AuthManager::createUserProvider($provider);
        }
        
        /**
         * Get the default user provider name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultUserProvider()
        {
            return \Illuminate\Auth\AuthManager::getDefaultUserProvider();
        }
        
        /**
         * Get the currently authenticated user.
         *
         * @return \App\Models\User|null 
         * @static 
         */ 
        public static function user()
        {
            return \Illuminate\Auth\SessionGuard::user();
        }
        
        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|string|null 
         * @static 
         */ 
        public static function id()
        {
            return \Illuminate\Auth\SessionGuard::id();
        }
        
        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function once($credentials = [])
        {
            return \Illuminate\Auth\SessionGuard::once($credentials);
        }
        
        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return \App\Models\User|false 
         * @static 
         */ 
        public static function onceUsingId($id)
        {
            return \Illuminate\Auth\SessionGuard::onceUsingId($id);
        }
        
        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */ 
        public static function validate($credentials = [])
        {
            return \Illuminate\Auth\SessionGuard::validate($credentials);
        }
        
        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
         * @static 
         */ 
        public static function basic($field = 'email', $extraConditions = [])
        {
            return \Illuminate\Auth\SessionGuard::basic($field, $extraConditions);
        }
        
        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
         * @static 
         */ 
        public static function onceBasic($field = 'email', $extraConditions = [])
        {
            return \Illuminate\Auth\SessionGuard::onceBasic($field, $extraConditions);
        }
        
        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @return bool 
         * @static 
         */ 
        public static function attempt($credentials = [], $remember = false)
        {
            return \Illuminate\Auth\SessionGuard::attempt($credentials, $remember);
        }
        
        /**
         * Attempt to authenticate a user with credentials and additional callbacks.
         *
         * @param array $credentials
         * @param array|callable|null $callbacks
         * @param bool $remember
         * @return bool 
         * @static 
         */ 
        public static function attemptWhen($credentials = [], $callbacks = null, $remember = false)
        {
            return \Illuminate\Auth\SessionGuard::attemptWhen($credentials, $callbacks, $remember);
        }
        
        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \App\Models\User|false 
         * @static 
         */ 
        public static function loginUsingId($id, $remember = false)
        {
            return \Illuminate\Auth\SessionGuard::loginUsingId($id, $remember);
        }
        
        /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @param bool $remember
         * @return void 
         * @static 
         */ 
        public static function login($user, $remember = false)
        {
            \Illuminate\Auth\SessionGuard::login($user, $remember);
        }
        
        /**
         * Log the user out of the application.
         *
         * @return void 
         * @static 
         */ 
        public static function logout()
        {
            \Illuminate\Auth\SessionGuard::logout();
        }
        
        /**
         * Log the user out of the application on their current device only.
         * 
         * This method does not cycle the "remember" token.
         *
         * @return void 
         * @static 
         */ 
        public static function logoutCurrentDevice()
        {
            \Illuminate\Auth\SessionGuard::logoutCurrentDevice();
        }
        
        /**
         * Invalidate other sessions for the current user.
         * 
         * The application must be using the AuthenticateSession middleware.
         *
         * @param string $password
         * @param string $attribute
         * @return \App\Models\User|null 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */ 
        public static function logoutOtherDevices($password, $attribute = 'password')
        {
            return \Illuminate\Auth\SessionGuard::logoutOtherDevices($password, $attribute);
        }
        
        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function attempting($callback)
        {
            \Illuminate\Auth\SessionGuard::attempting($callback);
        }
        
        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\Models\User 
         * @static 
         */ 
        public static function getLastAttempted()
        {
            return \Illuminate\Auth\SessionGuard::getLastAttempted();
        }
        
        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string 
         * @static 
         */ 
        public static function getName()
        {
            return \Illuminate\Auth\SessionGuard::getName();
        }
        
        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string 
         * @static 
         */ 
        public static function getRecallerName()
        {
            return \Illuminate\Auth\SessionGuard::getRecallerName();
        }
        
        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */ 
        public static function viaRemember()
        {
            return \Illuminate\Auth\SessionGuard::viaRemember();
        }
        
        /**
         * Set the number of minutes the remember me cookie should be valid for.
         *
         * @param int $minutes
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function setRememberDuration($minutes)
        {
            return \Illuminate\Auth\SessionGuard::setRememberDuration($minutes);
        }
        
        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function getCookieJar()
        {
            return \Illuminate\Auth\SessionGuard::getCookieJar();
        }
        
        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         * @return void 
         * @static 
         */ 
        public static function setCookieJar($cookie)
        {
            \Illuminate\Auth\SessionGuard::setCookieJar($cookie);
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getDispatcher()
        {
            return \Illuminate\Auth\SessionGuard::getDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setDispatcher($events)
        {
            \Illuminate\Auth\SessionGuard::setDispatcher($events);
        }
        
        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session 
         * @static 
         */ 
        public static function getSession()
        {
            return \Illuminate\Auth\SessionGuard::getSession();
        }
        
        /**
         * Return the currently cached user.
         *
         * @return \App\Models\User|null 
         * @static 
         */ 
        public static function getUser()
        {
            return \Illuminate\Auth\SessionGuard::getUser();
        }
        
        /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function setUser($user)
        {
            return \Illuminate\Auth\SessionGuard::setUser($user);
        }
        
        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request 
         * @static 
         */ 
        public static function getRequest()
        {
            return \Illuminate\Auth\SessionGuard::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function setRequest($request)
        {
            return \Illuminate\Auth\SessionGuard::setRequest($request);
        }
        
        /**
         * Get the timebox instance used by the guard.
         *
         * @return \Illuminate\Support\Timebox 
         * @static 
         */ 
        public static function getTimebox()
        {
            return \Illuminate\Auth\SessionGuard::getTimebox();
        }
        
        /**
         * Determine if the current user is authenticated. If not, throw an exception.
         *
         * @return \App\Models\User 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */ 
        public static function authenticate()
        {
            return \Illuminate\Auth\SessionGuard::authenticate();
        }
        
        /**
         * Determine if the guard has a user instance.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasUser()
        {
            return \Illuminate\Auth\SessionGuard::hasUser();
        }
        
        /**
         * Determine if the current user is authenticated.
         *
         * @return bool 
         * @static 
         */ 
        public static function check()
        {
            return \Illuminate\Auth\SessionGuard::check();
        }
        
        /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */ 
        public static function guest()
        {
            return \Illuminate\Auth\SessionGuard::guest();
        }
        
        /**
         * Forget the current user.
         *
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */ 
        public static function forgetUser()
        {
            return \Illuminate\Auth\SessionGuard::forgetUser();
        }
        
        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @static 
         */ 
        public static function getProvider()
        {
            return \Illuminate\Auth\SessionGuard::getProvider();
        }
        
        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         * @return void 
         * @static 
         */ 
        public static function setProvider($provider)
        {
            \Illuminate\Auth\SessionGuard::setProvider($provider);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Auth\SessionGuard::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Auth\SessionGuard::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Auth\SessionGuard::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Auth\SessionGuard::flushMacros();
        }
         
    }

    class Blade {
        
        /**
         * Compile the view at the given path.
         *
         * @param string|null $path
         * @return void 
         * @static 
         */ 
        public static function compile($path = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::compile($path);
        }
        
        /**
         * Get the path currently being compiled.
         *
         * @return string 
         * @static 
         */ 
        public static function getPath()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getPath();
        }
        
        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function setPath($path)
        {
            \Illuminate\View\Compilers\BladeCompiler::setPath($path);
        }
        
        /**
         * Compile the given Blade template contents.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function compileString($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileString($value);
        }
        
        /**
         * Evaluate and render a Blade string to HTML.
         *
         * @param string $string
         * @param array $data
         * @param bool $deleteCachedView
         * @return string 
         * @static 
         */ 
        public static function render($string, $data = [], $deleteCachedView = false)
        {
            return \Illuminate\View\Compilers\BladeCompiler::render($string, $data, $deleteCachedView);
        }
        
        /**
         * Render a component instance to HTML.
         *
         * @param \Illuminate\View\Component $component
         * @return string 
         * @static 
         */ 
        public static function renderComponent($component)
        {
            return \Illuminate\View\Compilers\BladeCompiler::renderComponent($component);
        }
        
        /**
         * Strip the parentheses from the given expression.
         *
         * @param string $expression
         * @return string 
         * @static 
         */ 
        public static function stripParentheses($expression)
        {
            return \Illuminate\View\Compilers\BladeCompiler::stripParentheses($expression);
        }
        
        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         * @return void 
         * @static 
         */ 
        public static function extend($compiler)
        {
            \Illuminate\View\Compilers\BladeCompiler::extend($compiler);
        }
        
        /**
         * Get the extensions used by the compiler.
         *
         * @return array 
         * @static 
         */ 
        public static function getExtensions()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getExtensions();
        }
        
        /**
         * Register an "if" statement directive.
         *
         * @param string $name
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function if($name, $callback)
        {
            \Illuminate\View\Compilers\BladeCompiler::if($name, $callback);
        }
        
        /**
         * Check the result of a condition.
         *
         * @param string $name
         * @param mixed $parameters
         * @return bool 
         * @static 
         */ 
        public static function check($name, ...$parameters)
        {
            return \Illuminate\View\Compilers\BladeCompiler::check($name, ...$parameters);
        }
        
        /**
         * Register a class-based component alias directive.
         *
         * @param string $class
         * @param string|null $alias
         * @param string $prefix
         * @return void 
         * @static 
         */ 
        public static function component($class, $alias = null, $prefix = '')
        {
            \Illuminate\View\Compilers\BladeCompiler::component($class, $alias, $prefix);
        }
        
        /**
         * Register an array of class-based components.
         *
         * @param array $components
         * @param string $prefix
         * @return void 
         * @static 
         */ 
        public static function components($components, $prefix = '')
        {
            \Illuminate\View\Compilers\BladeCompiler::components($components, $prefix);
        }
        
        /**
         * Get the registered class component aliases.
         *
         * @return array 
         * @static 
         */ 
        public static function getClassComponentAliases()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getClassComponentAliases();
        }
        
        /**
         * Register a new anonymous component path.
         *
         * @param string $path
         * @param string|null $prefix
         * @return void 
         * @static 
         */ 
        public static function anonymousComponentPath($path, $prefix = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::anonymousComponentPath($path, $prefix);
        }
        
        /**
         * Register an anonymous component namespace.
         *
         * @param string $directory
         * @param string|null $prefix
         * @return void 
         * @static 
         */ 
        public static function anonymousComponentNamespace($directory, $prefix = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::anonymousComponentNamespace($directory, $prefix);
        }
        
        /**
         * Register a class-based component namespace.
         *
         * @param string $namespace
         * @param string $prefix
         * @return void 
         * @static 
         */ 
        public static function componentNamespace($namespace, $prefix)
        {
            \Illuminate\View\Compilers\BladeCompiler::componentNamespace($namespace, $prefix);
        }
        
        /**
         * Get the registered anonymous component paths.
         *
         * @return array 
         * @static 
         */ 
        public static function getAnonymousComponentPaths()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getAnonymousComponentPaths();
        }
        
        /**
         * Get the registered anonymous component namespaces.
         *
         * @return array 
         * @static 
         */ 
        public static function getAnonymousComponentNamespaces()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getAnonymousComponentNamespaces();
        }
        
        /**
         * Get the registered class component namespaces.
         *
         * @return array 
         * @static 
         */ 
        public static function getClassComponentNamespaces()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getClassComponentNamespaces();
        }
        
        /**
         * Register a component alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void 
         * @static 
         */ 
        public static function aliasComponent($path, $alias = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::aliasComponent($path, $alias);
        }
        
        /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void 
         * @static 
         */ 
        public static function include($path, $alias = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::include($path, $alias);
        }
        
        /**
         * Register an include alias directive.
         *
         * @param string $path
         * @param string|null $alias
         * @return void 
         * @static 
         */ 
        public static function aliasInclude($path, $alias = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::aliasInclude($path, $alias);
        }
        
        /**
         * Register a handler for custom directives.
         *
         * @param string $name
         * @param callable $handler
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function directive($name, $handler)
        {
            \Illuminate\View\Compilers\BladeCompiler::directive($name, $handler);
        }
        
        /**
         * Get the list of custom directives.
         *
         * @return array 
         * @static 
         */ 
        public static function getCustomDirectives()
        {
            return \Illuminate\View\Compilers\BladeCompiler::getCustomDirectives();
        }
        
        /**
         * Register a new precompiler.
         *
         * @param callable $precompiler
         * @return void 
         * @static 
         */ 
        public static function precompiler($precompiler)
        {
            \Illuminate\View\Compilers\BladeCompiler::precompiler($precompiler);
        }
        
        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @return void 
         * @static 
         */ 
        public static function setEchoFormat($format)
        {
            \Illuminate\View\Compilers\BladeCompiler::setEchoFormat($format);
        }
        
        /**
         * Set the "echo" format to double encode entities.
         *
         * @return void 
         * @static 
         */ 
        public static function withDoubleEncoding()
        {
            \Illuminate\View\Compilers\BladeCompiler::withDoubleEncoding();
        }
        
        /**
         * Set the "echo" format to not double encode entities.
         *
         * @return void 
         * @static 
         */ 
        public static function withoutDoubleEncoding()
        {
            \Illuminate\View\Compilers\BladeCompiler::withoutDoubleEncoding();
        }
        
        /**
         * Indicate that component tags should not be compiled.
         *
         * @return void 
         * @static 
         */ 
        public static function withoutComponentTags()
        {
            \Illuminate\View\Compilers\BladeCompiler::withoutComponentTags();
        }
        
        /**
         * Get the path to the compiled version of a view.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function getCompiledPath($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::getCompiledPath($path);
        }
        
        /**
         * Determine if the view at the given path is expired.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isExpired($path)
        {
            //Method inherited from \Illuminate\View\Compilers\Compiler            
            return \Illuminate\View\Compilers\BladeCompiler::isExpired($path);
        }
        
        /**
         * Get a new component hash for a component name.
         *
         * @param string $component
         * @return string 
         * @static 
         */ 
        public static function newComponentHash($component)
        {
            return \Illuminate\View\Compilers\BladeCompiler::newComponentHash($component);
        }
        
        /**
         * Compile a class component opening.
         *
         * @param string $component
         * @param string $alias
         * @param string $data
         * @param string $hash
         * @return string 
         * @static 
         */ 
        public static function compileClassComponentOpening($component, $alias, $data, $hash)
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileClassComponentOpening($component, $alias, $data, $hash);
        }
        
        /**
         * Compile the end-component statements into valid PHP.
         *
         * @return string 
         * @static 
         */ 
        public static function compileEndComponentClass()
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileEndComponentClass();
        }
        
        /**
         * Sanitize the given component attribute value.
         *
         * @param mixed $value
         * @return mixed 
         * @static 
         */ 
        public static function sanitizeComponentAttribute($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value);
        }
        
        /**
         * Compile an end-once block into valid PHP.
         *
         * @return string 
         * @static 
         */ 
        public static function compileEndOnce()
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileEndOnce();
        }
        
        /**
         * Add a handler to be executed before echoing a given class.
         *
         * @param string|callable $class
         * @param callable|null $handler
         * @return void 
         * @static 
         */ 
        public static function stringable($class, $handler = null)
        {
            \Illuminate\View\Compilers\BladeCompiler::stringable($class, $handler);
        }
        
        /**
         * Compile Blade echos into valid PHP.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function compileEchos($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::compileEchos($value);
        }
        
        /**
         * Apply the echo handler for the value if it exists.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function applyEchoHandler($value)
        {
            return \Illuminate\View\Compilers\BladeCompiler::applyEchoHandler($value);
        }
         
    }

    class Broadcast {
        
        /**
         * Register the routes for handling broadcast channel authentication and sockets.
         *
         * @param array|null $attributes
         * @return void 
         * @static 
         */ 
        public static function routes($attributes = null)
        {
            \Illuminate\Broadcasting\BroadcastManager::routes($attributes);
        }
        
        /**
         * Register the routes for handling broadcast user authentication.
         *
         * @param array|null $attributes
         * @return void 
         * @static 
         */ 
        public static function userRoutes($attributes = null)
        {
            \Illuminate\Broadcasting\BroadcastManager::userRoutes($attributes);
        }
        
        /**
         * Register the routes for handling broadcast authentication and sockets.
         * 
         * Alias of "routes" method.
         *
         * @param array|null $attributes
         * @return void 
         * @static 
         */ 
        public static function channelRoutes($attributes = null)
        {
            \Illuminate\Broadcasting\BroadcastManager::channelRoutes($attributes);
        }
        
        /**
         * Get the socket ID for the given request.
         *
         * @param \Illuminate\Http\Request|null $request
         * @return string|null 
         * @static 
         */ 
        public static function socket($request = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::socket($request);
        }
        
        /**
         * Begin broadcasting an event.
         *
         * @param mixed|null $event
         * @return \Illuminate\Broadcasting\PendingBroadcast 
         * @static 
         */ 
        public static function event($event = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::event($event);
        }
        
        /**
         * Queue the given event for broadcast.
         *
         * @param mixed $event
         * @return void 
         * @static 
         */ 
        public static function queue($event)
        {
            \Illuminate\Broadcasting\BroadcastManager::queue($event);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed 
         * @static 
         */ 
        public static function connection($driver = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::connection($driver);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string|null $name
         * @return mixed 
         * @static 
         */ 
        public static function driver($name = null)
        {
            return \Illuminate\Broadcasting\BroadcastManager::driver($name);
        }
        
        /**
         * Get a Pusher instance for the given configuration.
         *
         * @param array $config
         * @return \Pusher\Pusher 
         * @static 
         */ 
        public static function pusher($config)
        {
            return \Illuminate\Broadcasting\BroadcastManager::pusher($config);
        }
        
        /**
         * Get an Ably instance for the given configuration.
         *
         * @param array $config
         * @return \Ably\AblyRest 
         * @static 
         */ 
        public static function ably($config)
        {
            return \Illuminate\Broadcasting\BroadcastManager::ably($config);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Broadcasting\BroadcastManager::getDefaultDriver();
        }
        
        /**
         * Set the default driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Broadcasting\BroadcastManager::setDefaultDriver($name);
        }
        
        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Broadcasting\BroadcastManager::purge($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Broadcasting\BroadcastManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Broadcasting\BroadcastManager::extend($driver, $callback);
        }
        
        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application 
         * @static 
         */ 
        public static function getApplication()
        {
            return \Illuminate\Broadcasting\BroadcastManager::getApplication();
        }
        
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Broadcasting\BroadcastManager 
         * @static 
         */ 
        public static function setApplication($app)
        {
            return \Illuminate\Broadcasting\BroadcastManager::setApplication($app);
        }
        
        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Broadcasting\BroadcastManager 
         * @static 
         */ 
        public static function forgetDrivers()
        {
            return \Illuminate\Broadcasting\BroadcastManager::forgetDrivers();
        }
         
    }

    class Bus {
        
        /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         * @return mixed 
         * @static 
         */ 
        public static function dispatch($command)
        {
            return \Illuminate\Bus\Dispatcher::dispatch($command);
        }
        
        /**
         * Dispatch a command to its appropriate handler in the current process.
         * 
         * Queueable jobs will be dispatched to the "sync" queue.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed 
         * @static 
         */ 
        public static function dispatchSync($command, $handler = null)
        {
            return \Illuminate\Bus\Dispatcher::dispatchSync($command, $handler);
        }
        
        /**
         * Dispatch a command to its appropriate handler in the current process without using the synchronous queue.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return mixed 
         * @static 
         */ 
        public static function dispatchNow($command, $handler = null)
        {
            return \Illuminate\Bus\Dispatcher::dispatchNow($command, $handler);
        }
        
        /**
         * Attempt to find the batch with the given ID.
         *
         * @param string $batchId
         * @return \Illuminate\Bus\Batch|null 
         * @static 
         */ 
        public static function findBatch($batchId)
        {
            return \Illuminate\Bus\Dispatcher::findBatch($batchId);
        }
        
        /**
         * Create a new batch of queueable jobs.
         *
         * @param \Illuminate\Support\Collection|array|mixed $jobs
         * @return \Illuminate\Bus\PendingBatch 
         * @static 
         */ 
        public static function batch($jobs)
        {
            return \Illuminate\Bus\Dispatcher::batch($jobs);
        }
        
        /**
         * Create a new chain of queueable jobs.
         *
         * @param \Illuminate\Support\Collection|array $jobs
         * @return \Illuminate\Foundation\Bus\PendingChain 
         * @static 
         */ 
        public static function chain($jobs)
        {
            return \Illuminate\Bus\Dispatcher::chain($jobs);
        }
        
        /**
         * Determine if the given command has a handler.
         *
         * @param mixed $command
         * @return bool 
         * @static 
         */ 
        public static function hasCommandHandler($command)
        {
            return \Illuminate\Bus\Dispatcher::hasCommandHandler($command);
        }
        
        /**
         * Retrieve the handler for a command.
         *
         * @param mixed $command
         * @return bool|mixed 
         * @static 
         */ 
        public static function getCommandHandler($command)
        {
            return \Illuminate\Bus\Dispatcher::getCommandHandler($command);
        }
        
        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         * @return mixed 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function dispatchToQueue($command)
        {
            return \Illuminate\Bus\Dispatcher::dispatchToQueue($command);
        }
        
        /**
         * Dispatch a command to its appropriate handler after the current process.
         *
         * @param mixed $command
         * @param mixed $handler
         * @return void 
         * @static 
         */ 
        public static function dispatchAfterResponse($command, $handler = null)
        {
            \Illuminate\Bus\Dispatcher::dispatchAfterResponse($command, $handler);
        }
        
        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
         * @return \Illuminate\Bus\Dispatcher 
         * @static 
         */ 
        public static function pipeThrough($pipes)
        {
            return \Illuminate\Bus\Dispatcher::pipeThrough($pipes);
        }
        
        /**
         * Map a command to a handler.
         *
         * @param array $map
         * @return \Illuminate\Bus\Dispatcher 
         * @static 
         */ 
        public static function map($map)
        {
            return \Illuminate\Bus\Dispatcher::map($map);
        }
        
        /**
         * Specify the jobs that should be dispatched instead of faked.
         *
         * @param array|string $jobsToDispatch
         * @return \Illuminate\Support\Testing\Fakes\BusFake 
         * @static 
         */ 
        public static function except($jobsToDispatch)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::except($jobsToDispatch);
        }
        
        /**
         * Assert if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatched($command, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertDispatched($command, $callback);
        }
        
        /**
         * Assert if a job was pushed a number of times.
         *
         * @param string|\Closure $command
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedTimes($command, $times = 1)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedTimes($command, $times);
        }
        
        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatched($command, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertNotDispatched($command, $callback);
        }
        
        /**
         * Assert that no jobs were dispatched.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingDispatched()
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertNothingDispatched();
        }
        
        /**
         * Assert if a job was explicitly dispatched synchronously based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedSync($command, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedSync($command, $callback);
        }
        
        /**
         * Assert if a job was pushed synchronously a number of times.
         *
         * @param string|\Closure $command
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedSyncTimes($command, $times = 1)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedSyncTimes($command, $times);
        }
        
        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatchedSync($command, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertNotDispatchedSync($command, $callback);
        }
        
        /**
         * Assert if a job was dispatched after the response was sent based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedAfterResponse($command, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedAfterResponse($command, $callback);
        }
        
        /**
         * Assert if a job was pushed after the response was sent a number of times.
         *
         * @param string|\Closure $command
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedAfterResponseTimes($command, $times = 1)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedAfterResponseTimes($command, $times);
        }
        
        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatchedAfterResponse($command, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertNotDispatchedAfterResponse($command, $callback);
        }
        
        /**
         * Assert if a chain of jobs was dispatched.
         *
         * @param array $expectedChain
         * @return void 
         * @static 
         */ 
        public static function assertChained($expectedChain)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertChained($expectedChain);
        }
        
        /**
         * Assert if a job was dispatched with an empty chain based on a truth-test callback.
         *
         * @param string|\Closure $command
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedWithoutChain($command, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertDispatchedWithoutChain($command, $callback);
        }
        
        /**
         * Assert if a batch was dispatched based on a truth-test callback.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function assertBatched($callback)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertBatched($callback);
        }
        
        /**
         * Assert the number of batches that have been dispatched.
         *
         * @param int $count
         * @return void 
         * @static 
         */ 
        public static function assertBatchCount($count)
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertBatchCount($count);
        }
        
        /**
         * Assert that no batched jobs were dispatched.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingBatched()
        {
            \Illuminate\Support\Testing\Fakes\BusFake::assertNothingBatched();
        }
        
        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatched($command, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::dispatched($command, $callback);
        }
        
        /**
         * Get all of the jobs dispatched synchronously matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatchedSync($command, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::dispatchedSync($command, $callback);
        }
        
        /**
         * Get all of the jobs dispatched after the response was sent matching a truth-test callback.
         *
         * @param string $command
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatchedAfterResponse($command, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::dispatchedAfterResponse($command, $callback);
        }
        
        /**
         * Get all of the pending batches matching a truth-test callback.
         *
         * @param callable $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function batched($callback)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::batched($callback);
        }
        
        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool 
         * @static 
         */ 
        public static function hasDispatched($command)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::hasDispatched($command);
        }
        
        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool 
         * @static 
         */ 
        public static function hasDispatchedSync($command)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::hasDispatchedSync($command);
        }
        
        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param string $command
         * @return bool 
         * @static 
         */ 
        public static function hasDispatchedAfterResponse($command)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::hasDispatchedAfterResponse($command);
        }
        
        /**
         * Dispatch an empty job batch for testing.
         *
         * @param string $name
         * @return \Illuminate\Bus\Batch 
         * @static 
         */ 
        public static function dispatchFakeBatch($name = '')
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::dispatchFakeBatch($name);
        }
        
        /**
         * Record the fake pending batch dispatch.
         *
         * @param \Illuminate\Bus\PendingBatch $pendingBatch
         * @return \Illuminate\Bus\Batch 
         * @static 
         */ 
        public static function recordPendingBatch($pendingBatch)
        {
            return \Illuminate\Support\Testing\Fakes\BusFake::recordPendingBatch($pendingBatch);
        }
         
    }

    class Cache {
        
        /**
         * Get a cache store instance by name, wrapped in a repository.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function store($name = null)
        {
            return \Illuminate\Cache\CacheManager::store($name);
        }
        
        /**
         * Get a cache driver instance.
         *
         * @param string|null $driver
         * @return \Illuminate\Contracts\Cache\Repository 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            return \Illuminate\Cache\CacheManager::driver($driver);
        }
        
        /**
         * Resolve the given store.
         *
         * @param string $name
         * @return \Illuminate\Contracts\Cache\Repository 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function resolve($name)
        {
            return \Illuminate\Cache\CacheManager::resolve($name);
        }
        
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
        public static function repository($store)
        {
            return \Illuminate\Cache\CacheManager::repository($store);
        }
        
        /**
         * Re-set the event dispatcher on all resolved cache repositories.
         *
         * @return void 
         * @static 
         */ 
        public static function refreshEventDispatcher()
        {
            \Illuminate\Cache\CacheManager::refreshEventDispatcher();
        }
        
        /**
         * Get the default cache driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }
        
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }
        
        /**
         * Unset the given driver instances.
         *
         * @param array|string|null $name
         * @return \Illuminate\Cache\CacheManager 
         * @static 
         */ 
        public static function forgetDriver($name = null)
        {
            return \Illuminate\Cache\CacheManager::forgetDriver($name);
        }
        
        /**
         * Disconnect the given driver and remove from local cache.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Cache\CacheManager::purge($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Cache\CacheManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }
        
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Cache\CacheManager 
         * @static 
         */ 
        public static function setApplication($app)
        {
            return \Illuminate\Cache\CacheManager::setApplication($app);
        }
        
        /**
         * Determine if an item exists in the cache.
         *
         * @param array|string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Cache\Repository::has($key);
        }
        
        /**
         * Determine if an item doesn't exist in the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function missing($key)
        {
            return \Illuminate\Cache\Repository::missing($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @template TCacheValue
         * @param array|string $key
         * @param \Illuminate\Cache\TCacheValue|\Illuminate\Cache\(\Closure():  TCacheValue)  $default
         * @return \Illuminate\Cache\(TCacheValue is null ? mixed : TCacheValue)
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Cache\Repository::get($key, $default);
        }
        
        /**
         * Retrieve multiple items from the cache by key.
         * 
         * Items not found in the cache will have a null value.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function many($keys)
        {
            return \Illuminate\Cache\Repository::many($keys);
        }
        
        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @return \Illuminate\Cache\iterable 
         * @param \Psr\SimpleCache\iterable<string> $keys A list of keys that can be obtained in a single operation.
         * @param mixed $default Default value to return for keys that do not exist.
         * @return \Psr\SimpleCache\iterable<string, mixed> A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function getMultiple($keys, $default = null)
        {
            return \Illuminate\Cache\Repository::getMultiple($keys, $default);
        }
        
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @template TCacheValue
         * @param array|string $key
         * @param \Illuminate\Cache\TCacheValue|\Illuminate\Cache\(\Closure():  TCacheValue)  $default
         * @return \Illuminate\Cache\(TCacheValue is null ? mixed : TCacheValue)
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
            return \Illuminate\Cache\Repository::pull($key, $default);
        }
        
        /**
         * Store an item in the cache.
         *
         * @param array|string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool 
         * @static 
         */ 
        public static function put($key, $value, $ttl = null)
        {
            return \Illuminate\Cache\Repository::put($key, $value, $ttl);
        }
        
        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @return bool 
         * @param string $key The key of the item to store.
         * @param mixed $value The value of the item to store, must be serializable.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                      the driver supports TTL then the library may set a default value
         *                                      for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function set($key, $value, $ttl = null)
        {
            return \Illuminate\Cache\Repository::set($key, $value, $ttl);
        }
        
        /**
         * Store multiple items in the cache for a given number of seconds.
         *
         * @param array $values
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool 
         * @static 
         */ 
        public static function putMany($values, $ttl = null)
        {
            return \Illuminate\Cache\Repository::putMany($values, $ttl);
        }
        
        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @return bool 
         * @param \Psr\SimpleCache\iterable $values A list of key => value pairs for a multiple-set operation.
         * @param null|int|\DateInterval $ttl Optional. The TTL value of this item. If no value is sent and
         *                                       the driver supports TTL then the library may set a default value
         *                                       for it or let the driver take care of that.
         * @return bool True on success and false on failure.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $values is neither an array nor a Traversable,
         *   or if any of the $values are not a legal value.
         * @static 
         */ 
        public static function setMultiple($values, $ttl = null)
        {
            return \Illuminate\Cache\Repository::setMultiple($values, $ttl);
        }
        
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTimeInterface|\DateInterval|int|null $ttl
         * @return bool 
         * @static 
         */ 
        public static function add($key, $value, $ttl = null)
        {
            return \Illuminate\Cache\Repository::add($key, $value, $ttl);
        }
        
        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function increment($key, $value = 1)
        {
            return \Illuminate\Cache\Repository::increment($key, $value);
        }
        
        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int|bool 
         * @static 
         */ 
        public static function decrement($key, $value = 1)
        {
            return \Illuminate\Cache\Repository::decrement($key, $value);
        }
        
        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return bool 
         * @static 
         */ 
        public static function forever($key, $value)
        {
            return \Illuminate\Cache\Repository::forever($key, $value);
        }
        
        /**
         * Get an item from the cache, or execute the given Closure and store the result.
         *
         * @template TCacheValue
         * @param string $key
         * @param \Closure|\DateTimeInterface|\DateInterval|int|null $ttl
         * @param \Closure():  TCacheValue  $callback
         * @return \Illuminate\Cache\TCacheValue 
         * @static 
         */ 
        public static function remember($key, $ttl, $callback)
        {
            return \Illuminate\Cache\Repository::remember($key, $ttl, $callback);
        }
        
        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @template TCacheValue
         * @param string $key
         * @param \Closure():  TCacheValue  $callback
         * @return \Illuminate\Cache\TCacheValue 
         * @static 
         */ 
        public static function sear($key, $callback)
        {
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }
        
        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @template TCacheValue
         * @param string $key
         * @param \Closure():  TCacheValue  $callback
         * @return \Illuminate\Cache\TCacheValue 
         * @static 
         */ 
        public static function rememberForever($key, $callback)
        {
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function forget($key)
        {
            return \Illuminate\Cache\Repository::forget($key);
        }
        
        /**
         * Delete an item from the cache by its unique key.
         *
         * @return bool 
         * @param string $key The unique cache key of the item to delete.
         * @return bool True if the item was successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if the $key string is not a legal value.
         * @static 
         */ 
        public static function delete($key)
        {
            return \Illuminate\Cache\Repository::delete($key);
        }
        
        /**
         * Deletes multiple cache items in a single operation.
         *
         * @return bool 
         * @param \Psr\SimpleCache\iterable<string> $keys A list of string-based keys to be deleted.
         * @return bool True if the items were successfully removed. False if there was an error.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *   MUST be thrown if $keys is neither an array nor a Traversable,
         *   or if any of the $keys are not a legal value.
         * @static 
         */ 
        public static function deleteMultiple($keys)
        {
            return \Illuminate\Cache\Repository::deleteMultiple($keys);
        }
        
        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool 
         * @return bool True on success and false on failure.
         * @static 
         */ 
        public static function clear()
        {
            return \Illuminate\Cache\Repository::clear();
        }
        
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param array|mixed $names
         * @return \Illuminate\Cache\TaggedCache 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function tags($names)
        {
            return \Illuminate\Cache\Repository::tags($names);
        }
        
        /**
         * Determine if the current store supports tags.
         *
         * @return bool 
         * @static 
         */ 
        public static function supportsTags()
        {
            return \Illuminate\Cache\Repository::supportsTags();
        }
        
        /**
         * Get the default cache time.
         *
         * @return int|null 
         * @static 
         */ 
        public static function getDefaultCacheTime()
        {
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }
        
        /**
         * Set the default cache time in seconds.
         *
         * @param int|null $seconds
         * @return \Illuminate\Cache\Repository 
         * @static 
         */ 
        public static function setDefaultCacheTime($seconds)
        {
            return \Illuminate\Cache\Repository::setDefaultCacheTime($seconds);
        }
        
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store 
         * @static 
         */ 
        public static function getStore()
        {
            return \Illuminate\Cache\Repository::getStore();
        }
        
        /**
         * Set the cache store implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return static 
         * @static 
         */ 
        public static function setStore($store)
        {
            return \Illuminate\Cache\Repository::setStore($store);
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
            return \Illuminate\Cache\Repository::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            \Illuminate\Cache\Repository::setEventDispatcher($events);
        }
        
        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            return \Illuminate\Cache\Repository::offsetExists($key);
        }
        
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            return \Illuminate\Cache\Repository::offsetGet($key);
        }
        
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }
        
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            \Illuminate\Cache\Repository::offsetUnset($key);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Cache\Repository::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Cache\Repository::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Cache\Repository::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }
        
        /**
         * Get a lock instance.
         *
         * @param string $name
         * @param int $seconds
         * @param string|null $owner
         * @return \Illuminate\Contracts\Cache\Lock 
         * @static 
         */ 
        public static function lock($name, $seconds = 0, $owner = null)
        {
            return \Illuminate\Cache\FileStore::lock($name, $seconds, $owner);
        }
        
        /**
         * Restore a lock instance using the owner identifier.
         *
         * @param string $name
         * @param string $owner
         * @return \Illuminate\Contracts\Cache\Lock 
         * @static 
         */ 
        public static function restoreLock($name, $owner)
        {
            return \Illuminate\Cache\FileStore::restoreLock($name, $owner);
        }
        
        /**
         * Remove all items from the cache.
         *
         * @return bool 
         * @static 
         */ 
        public static function flush()
        {
            return \Illuminate\Cache\FileStore::flush();
        }
        
        /**
         * Get the full path for the given cache key.
         *
         * @param string $key
         * @return string 
         * @static 
         */ 
        public static function path($key)
        {
            return \Illuminate\Cache\FileStore::path($key);
        }
        
        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem 
         * @static 
         */ 
        public static function getFilesystem()
        {
            return \Illuminate\Cache\FileStore::getFilesystem();
        }
        
        /**
         * Get the working directory of the cache.
         *
         * @return string 
         * @static 
         */ 
        public static function getDirectory()
        {
            return \Illuminate\Cache\FileStore::getDirectory();
        }
        
        /**
         * Set the cache directory where locks should be stored.
         *
         * @param string|null $lockDirectory
         * @return \Illuminate\Cache\FileStore 
         * @static 
         */ 
        public static function setLockDirectory($lockDirectory)
        {
            return \Illuminate\Cache\FileStore::setLockDirectory($lockDirectory);
        }
        
        /**
         * Get the cache key prefix.
         *
         * @return string 
         * @static 
         */ 
        public static function getPrefix()
        {
            return \Illuminate\Cache\FileStore::getPrefix();
        }
         
    }

    class Config {
        
        /**
         * Determine if the given configuration value exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Config\Repository::has($key);
        }
        
        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Config\Repository::get($key, $default);
        }
        
        /**
         * Get many configuration values.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function getMany($keys)
        {
            return \Illuminate\Config\Repository::getMany($keys);
        }
        
        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function set($key, $value = null)
        {
            \Illuminate\Config\Repository::set($key, $value);
        }
        
        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function prepend($key, $value)
        {
            \Illuminate\Config\Repository::prepend($key, $value);
        }
        
        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
            \Illuminate\Config\Repository::push($key, $value);
        }
        
        /**
         * Get all of the configuration items for the application.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            return \Illuminate\Config\Repository::all();
        }
        
        /**
         * Determine if the given configuration option exists.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            return \Illuminate\Config\Repository::offsetExists($key);
        }
        
        /**
         * Get a configuration option.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            return \Illuminate\Config\Repository::offsetGet($key);
        }
        
        /**
         * Set a configuration option.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            \Illuminate\Config\Repository::offsetSet($key, $value);
        }
        
        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            \Illuminate\Config\Repository::offsetUnset($key);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Config\Repository::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Config\Repository::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Config\Repository::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Config\Repository::flushMacros();
        }
         
    }

    class Cookie {
        
        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
        
        /**
         * Create a cookie that lasts "forever" (400 days).
         *
         * @param string $name
         * @param string $value
         * @param string|null $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param bool $httpOnly
         * @param bool $raw
         * @param string|null $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
        
        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         * @return \Symfony\Component\HttpFoundation\Cookie 
         * @static 
         */ 
        public static function forget($name, $path = null, $domain = null)
        {
            return \Illuminate\Cookie\CookieJar::forget($name, $path, $domain);
        }
        
        /**
         * Determine if a cookie has been queued.
         *
         * @param string $key
         * @param string|null $path
         * @return bool 
         * @static 
         */ 
        public static function hasQueued($key, $path = null)
        {
            return \Illuminate\Cookie\CookieJar::hasQueued($key, $path);
        }
        
        /**
         * Get a queued cookie instance.
         *
         * @param string $key
         * @param mixed $default
         * @param string|null $path
         * @return \Symfony\Component\HttpFoundation\Cookie|null 
         * @static 
         */ 
        public static function queued($key, $default = null, $path = null)
        {
            return \Illuminate\Cookie\CookieJar::queued($key, $default, $path);
        }
        
        /**
         * Queue a cookie to send with the next response.
         *
         * @param mixed $parameters
         * @return void 
         * @static 
         */ 
        public static function queue(...$parameters)
        {
            \Illuminate\Cookie\CookieJar::queue(...$parameters);
        }
        
        /**
         * Queue a cookie to expire with the next response.
         *
         * @param string $name
         * @param string|null $path
         * @param string|null $domain
         * @return void 
         * @static 
         */ 
        public static function expire($name, $path = null, $domain = null)
        {
            \Illuminate\Cookie\CookieJar::expire($name, $path, $domain);
        }
        
        /**
         * Remove a cookie from the queue.
         *
         * @param string $name
         * @param string|null $path
         * @return void 
         * @static 
         */ 
        public static function unqueue($name, $path = null)
        {
            \Illuminate\Cookie\CookieJar::unqueue($name, $path);
        }
        
        /**
         * Set the default path and domain for the jar.
         *
         * @param string $path
         * @param string|null $domain
         * @param bool|null $secure
         * @param string|null $sameSite
         * @return \Illuminate\Cookie\CookieJar 
         * @static 
         */ 
        public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
            return \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }
        
        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[] 
         * @static 
         */ 
        public static function getQueuedCookies()
        {
            return \Illuminate\Cookie\CookieJar::getQueuedCookies();
        }
        
        /**
         * Flush the cookies which have been queued for the next request.
         *
         * @return \Illuminate\Cookie\CookieJar 
         * @static 
         */ 
        public static function flushQueuedCookies()
        {
            return \Illuminate\Cookie\CookieJar::flushQueuedCookies();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Cookie\CookieJar::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Cookie\CookieJar::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Cookie\CookieJar::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Cookie\CookieJar::flushMacros();
        }
         
    }

    class Crypt {
        
        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param string $key
         * @param string $cipher
         * @return bool 
         * @static 
         */ 
        public static function supported($key, $cipher)
        {
            return \Illuminate\Encryption\Encrypter::supported($key, $cipher);
        }
        
        /**
         * Create a new encryption key for the given cipher.
         *
         * @param string $cipher
         * @return string 
         * @static 
         */ 
        public static function generateKey($cipher)
        {
            return \Illuminate\Encryption\Encrypter::generateKey($cipher);
        }
        
        /**
         * Encrypt the given value.
         *
         * @param mixed $value
         * @param bool $serialize
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */ 
        public static function encrypt($value, $serialize = true)
        {
            return \Illuminate\Encryption\Encrypter::encrypt($value, $serialize);
        }
        
        /**
         * Encrypt a string without serialization.
         *
         * @param string $value
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\EncryptException
         * @static 
         */ 
        public static function encryptString($value)
        {
            return \Illuminate\Encryption\Encrypter::encryptString($value);
        }
        
        /**
         * Decrypt the given value.
         *
         * @param string $payload
         * @param bool $unserialize
         * @return mixed 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */ 
        public static function decrypt($payload, $unserialize = true)
        {
            return \Illuminate\Encryption\Encrypter::decrypt($payload, $unserialize);
        }
        
        /**
         * Decrypt the given string without unserialization.
         *
         * @param string $payload
         * @return string 
         * @throws \Illuminate\Contracts\Encryption\DecryptException
         * @static 
         */ 
        public static function decryptString($payload)
        {
            return \Illuminate\Encryption\Encrypter::decryptString($payload);
        }
        
        /**
         * Get the encryption key that the encrypter is currently using.
         *
         * @return string 
         * @static 
         */ 
        public static function getKey()
        {
            return \Illuminate\Encryption\Encrypter::getKey();
        }
         
    }

    class Date {
        
        /**
         * Use the given handler when generating dates (class name, callable, or factory).
         *
         * @param mixed $handler
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function use($handler)
        {
            return \Illuminate\Support\DateFactory::use($handler);
        }
        
        /**
         * Use the default date class when generating dates.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefault()
        {
            \Illuminate\Support\DateFactory::useDefault();
        }
        
        /**
         * Execute the given callable on each date creation.
         *
         * @param callable $callable
         * @return void 
         * @static 
         */ 
        public static function useCallable($callable)
        {
            \Illuminate\Support\DateFactory::useCallable($callable);
        }
        
        /**
         * Use the given date type (class) when generating dates.
         *
         * @param string $dateClass
         * @return void 
         * @static 
         */ 
        public static function useClass($dateClass)
        {
            \Illuminate\Support\DateFactory::useClass($dateClass);
        }
        
        /**
         * Use the given Carbon factory when generating dates.
         *
         * @param object $factory
         * @return void 
         * @static 
         */ 
        public static function useFactory($factory)
        {
            \Illuminate\Support\DateFactory::useFactory($factory);
        }
         
    }

    class DB {
        
        /**
         * Get a database connection instance.
         *
         * @param string|null $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Database\DatabaseManager::connection($name);
        }
        
        /**
         * Register a custom Doctrine type.
         *
         * @param string $class
         * @param string $name
         * @param string $type
         * @return void 
         * @throws \Doctrine\DBAL\Exception
         * @throws \RuntimeException
         * @static 
         */ 
        public static function registerDoctrineType($class, $name, $type)
        {
            \Illuminate\Database\DatabaseManager::registerDoctrineType($class, $name, $type);
        }
        
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Database\DatabaseManager::purge($name);
        }
        
        /**
         * Disconnect from the given database.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function disconnect($name = null)
        {
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }
        
        /**
         * Reconnect to the given database.
         *
         * @param string|null $name
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function reconnect($name = null)
        {
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }
        
        /**
         * Set the default database connection for the callback execution.
         *
         * @param string $name
         * @param callable $callback
         * @return mixed 
         * @static 
         */ 
        public static function usingConnection($name, $callback)
        {
            return \Illuminate\Database\DatabaseManager::usingConnection($name, $callback);
        }
        
        /**
         * Get the default connection name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultConnection()
        {
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }
        
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultConnection($name)
        {
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }
        
        /**
         * Get all of the support drivers.
         *
         * @return string[] 
         * @static 
         */ 
        public static function supportedDrivers()
        {
            return \Illuminate\Database\DatabaseManager::supportedDrivers();
        }
        
        /**
         * Get all of the drivers that are actually available.
         *
         * @return string[] 
         * @static 
         */ 
        public static function availableDrivers()
        {
            return \Illuminate\Database\DatabaseManager::availableDrivers();
        }
        
        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($name, $resolver)
        {
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }
        
        /**
         * Remove an extension connection resolver.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function forgetExtension($name)
        {
            \Illuminate\Database\DatabaseManager::forgetExtension($name);
        }
        
        /**
         * Return all of the created connections.
         *
         * @return array<string, \Illuminate\Database\Connection> 
         * @static 
         */ 
        public static function getConnections()
        {
            return \Illuminate\Database\DatabaseManager::getConnections();
        }
        
        /**
         * Set the database reconnector callback.
         *
         * @param callable $reconnector
         * @return void 
         * @static 
         */ 
        public static function setReconnector($reconnector)
        {
            \Illuminate\Database\DatabaseManager::setReconnector($reconnector);
        }
        
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Database\DatabaseManager 
         * @static 
         */ 
        public static function setApplication($app)
        {
            return \Illuminate\Database\DatabaseManager::setApplication($app);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Database\DatabaseManager::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Database\DatabaseManager::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Database\DatabaseManager::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Database\DatabaseManager::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Database\DatabaseManager::macroCall($method, $parameters);
        }
        
        /**
         * Determine if the connected database is a MariaDB database.
         *
         * @return bool 
         * @static 
         */ 
        public static function isMaria()
        {
            return \Illuminate\Database\MySqlConnection::isMaria();
        }
        
        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */ 
        public static function getSchemaBuilder()
        {
            return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
        }
        
        /**
         * Get the schema state for the connection.
         *
         * @param \Illuminate\Filesystem\Filesystem|null $files
         * @param callable|null $processFactory
         * @return \Illuminate\Database\Schema\MySqlSchemaState 
         * @static 
         */ 
        public static function getSchemaState($files = null, $processFactory = null)
        {
            return \Illuminate\Database\MySqlConnection::getSchemaState($files, $processFactory);
        }
        
        /**
         * Set the query grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
        }
        
        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
        }
        
        /**
         * Set the query post processor to the default implementation.
         *
         * @return void 
         * @static 
         */ 
        public static function useDefaultPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
        }
        
        /**
         * Begin a fluent query against a database table.
         *
         * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Contracts\Database\Query\Expression|string $table
         * @param string|null $as
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function table($table, $as = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::table($table, $as);
        }
        
        /**
         * Get a new query builder instance.
         *
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */ 
        public static function query()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::query();
        }
        
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed 
         * @static 
         */ 
        public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement and return the first column of the first row.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return mixed 
         * @throws \Illuminate\Database\MultipleColumnsSelectedException
         * @static 
         */ 
        public static function scalar($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::scalar($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function selectFromWriteConnection($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectFromWriteConnection($query, $bindings);
        }
        
        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */ 
        public static function select($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::select($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database and returns all of the result sets.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array 
         * @static 
         */ 
        public static function selectResultSets($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::selectResultSets($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return \Generator 
         * @static 
         */ 
        public static function cursor($query, $bindings = [], $useReadPdo = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::cursor($query, $bindings, $useReadPdo);
        }
        
        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function insert($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
        }
        
        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function update($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::update($query, $bindings);
        }
        
        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function delete($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
        }
        
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool 
         * @static 
         */ 
        public static function statement($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
        }
        
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int 
         * @static 
         */ 
        public static function affectingStatement($query, $bindings = [])
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
        }
        
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool 
         * @static 
         */ 
        public static function unprepared($query)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::unprepared($query);
        }
        
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array 
         * @static 
         */ 
        public static function pretend($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretend($callback);
        }
        
        /**
         * Bind values to their parameters in the given statement.
         *
         * @param \PDOStatement $statement
         * @param array $bindings
         * @return void 
         * @static 
         */ 
        public static function bindValues($statement, $bindings)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::bindValues($statement, $bindings);
        }
        
        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array 
         * @static 
         */ 
        public static function prepareBindings($bindings)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
        }
        
        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void 
         * @static 
         */ 
        public static function logQuery($query, $bindings, $time = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
        }
        
        /**
         * Register a callback to be invoked when the connection queries for longer than a given amount of time.
         *
         * @param \DateTimeInterface|\Carbon\CarbonInterval|float|int $threshold
         * @param callable $handler
         * @return void 
         * @static 
         */ 
        public static function whenQueryingForLongerThan($threshold, $handler)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::whenQueryingForLongerThan($threshold, $handler);
        }
        
        /**
         * Allow all the query duration handlers to run again, even if they have already run.
         *
         * @return void 
         * @static 
         */ 
        public static function allowQueryDurationHandlersToRunAgain()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::allowQueryDurationHandlersToRunAgain();
        }
        
        /**
         * Get the duration of all run queries in milliseconds.
         *
         * @return float 
         * @static 
         */ 
        public static function totalQueryDuration()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::totalQueryDuration();
        }
        
        /**
         * Reset the duration of all run queries.
         *
         * @return void 
         * @static 
         */ 
        public static function resetTotalQueryDuration()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::resetTotalQueryDuration();
        }
        
        /**
         * Reconnect to the database if a PDO connection is missing.
         *
         * @return void 
         * @static 
         */ 
        public static function reconnectIfMissingConnection()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::reconnectIfMissingConnection();
        }
        
        /**
         * Register a hook to be run just before a database query is executed.
         *
         * @param \Closure $callback
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function beforeExecuting($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::beforeExecuting($callback);
        }
        
        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function listen($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::listen($callback);
        }
        
        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Contracts\Database\Query\Expression 
         * @static 
         */ 
        public static function raw($value)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::raw($value);
        }
        
        /**
         * Escape a value for safe SQL embedding.
         *
         * @param string|float|int|bool|null $value
         * @param bool $binary
         * @return string 
         * @static 
         */ 
        public static function escape($value, $binary = false)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::escape($value, $binary);
        }
        
        /**
         * Determine if the database connection has modified any database records.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasModifiedRecords()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::hasModifiedRecords();
        }
        
        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function recordsHaveBeenModified($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::recordsHaveBeenModified($value);
        }
        
        /**
         * Set the record modification state.
         *
         * @param bool $value
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setRecordModificationState($value)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setRecordModificationState($value);
        }
        
        /**
         * Reset the record modification state.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetRecordModificationState()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::forgetRecordModificationState();
        }
        
        /**
         * Indicate that the connection should use the write PDO connection for reads.
         *
         * @param bool $value
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function useWriteConnectionWhenReading($value = true)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::useWriteConnectionWhenReading($value);
        }
        
        /**
         * Is Doctrine available?
         *
         * @return bool 
         * @static 
         */ 
        public static function isDoctrineAvailable()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::isDoctrineAvailable();
        }
        
        /**
         * Indicates whether native alter operations will be used when dropping, renaming, or modifying columns, even if Doctrine DBAL is installed.
         *
         * @return bool 
         * @static 
         */ 
        public static function usingNativeSchemaOperations()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::usingNativeSchemaOperations();
        }
        
        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column 
         * @static 
         */ 
        public static function getDoctrineColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
        }
        
        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager 
         * @static 
         */ 
        public static function getDoctrineSchemaManager()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
        }
        
        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection 
         * @static 
         */ 
        public static function getDoctrineConnection()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
        }
        
        /**
         * Get the current PDO connection.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPdo();
        }
        
        /**
         * Get the current PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null 
         * @static 
         */ 
        public static function getRawPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getRawPdo();
        }
        
        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO 
         * @static 
         */ 
        public static function getReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getReadPdo();
        }
        
        /**
         * Get the current read PDO connection parameter without executing any reconnect logic.
         *
         * @return \PDO|\Closure|null 
         * @static 
         */ 
        public static function getRawReadPdo()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getRawReadPdo();
        }
        
        /**
         * Set the PDO connection.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPdo($pdo);
        }
        
        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|\Closure|null $pdo
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setReadPdo($pdo)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
        }
        
        /**
         * Get the database connection name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getName();
        }
        
        /**
         * Get the database connection full name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getNameWithReadWriteType()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getNameWithReadWriteType();
        }
        
        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @return mixed 
         * @static 
         */ 
        public static function getConfig($option = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getConfig($option);
        }
        
        /**
         * Get the PDO driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDriverName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDriverName();
        }
        
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar 
         * @static 
         */ 
        public static function getQueryGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryGrammar();
        }
        
        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setQueryGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
        }
        
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar 
         * @static 
         */ 
        public static function getSchemaGrammar()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
        }
        
        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setSchemaGrammar($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
        }
        
        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor 
         * @static 
         */ 
        public static function getPostProcessor()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getPostProcessor();
        }
        
        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setPostProcessor($processor)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setPostProcessor($processor);
        }
        
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getEventDispatcher();
        }
        
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setEventDispatcher($events)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setEventDispatcher($events);
        }
        
        /**
         * Unset the event dispatcher for this connection.
         *
         * @return void 
         * @static 
         */ 
        public static function unsetEventDispatcher()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::unsetEventDispatcher();
        }
        
        /**
         * Set the transaction manager instance on the connection.
         *
         * @param \Illuminate\Database\DatabaseTransactionsManager $manager
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setTransactionManager($manager)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setTransactionManager($manager);
        }
        
        /**
         * Unset the transaction manager for this connection.
         *
         * @return void 
         * @static 
         */ 
        public static function unsetTransactionManager()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::unsetTransactionManager();
        }
        
        /**
         * Determine if the connection is in a "dry run".
         *
         * @return bool 
         * @static 
         */ 
        public static function pretending()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::pretending();
        }
        
        /**
         * Get the connection query log.
         *
         * @return array 
         * @static 
         */ 
        public static function getQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getQueryLog();
        }
        
        /**
         * Get the connection query log with embedded bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getRawQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getRawQueryLog();
        }
        
        /**
         * Clear the query log.
         *
         * @return void 
         * @static 
         */ 
        public static function flushQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::flushQueryLog();
        }
        
        /**
         * Enable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function enableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::enableQueryLog();
        }
        
        /**
         * Disable the query log on the connection.
         *
         * @return void 
         * @static 
         */ 
        public static function disableQueryLog()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::disableQueryLog();
        }
        
        /**
         * Determine whether we're logging queries.
         *
         * @return bool 
         * @static 
         */ 
        public static function logging()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::logging();
        }
        
        /**
         * Get the name of the connected database.
         *
         * @return string 
         * @static 
         */ 
        public static function getDatabaseName()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getDatabaseName();
        }
        
        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setDatabaseName($database)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
        }
        
        /**
         * Set the read / write type of the connection.
         *
         * @param string|null $readWriteType
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setReadWriteType($readWriteType)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setReadWriteType($readWriteType);
        }
        
        /**
         * Get the table prefix for the connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getTablePrefix()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getTablePrefix();
        }
        
        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return \Illuminate\Database\MySqlConnection 
         * @static 
         */ 
        public static function setTablePrefix($prefix)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
        }
        
        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar 
         * @static 
         */ 
        public static function withTablePrefix($grammar)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
        }
        
        /**
         * Register a connection resolver.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function resolverFor($driver, $callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::resolverFor($driver, $callback);
        }
        
        /**
         * Get the connection resolver for the given driver.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */ 
        public static function getResolver($driver)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::getResolver($driver);
        }
        
        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @param int $attempts
         * @return mixed 
         * @throws \Throwable
         * @static 
         */ 
        public static function transaction($callback, $attempts = 1)
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transaction($callback, $attempts);
        }
        
        /**
         * Start a new database transaction.
         *
         * @return void 
         * @throws \Throwable
         * @static 
         */ 
        public static function beginTransaction()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::beginTransaction();
        }
        
        /**
         * Commit the active database transaction.
         *
         * @return void 
         * @throws \Throwable
         * @static 
         */ 
        public static function commit()
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::commit();
        }
        
        /**
         * Rollback the active database transaction.
         *
         * @param int|null $toLevel
         * @return void 
         * @throws \Throwable
         * @static 
         */ 
        public static function rollBack($toLevel = null)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::rollBack($toLevel);
        }
        
        /**
         * Get the number of active transactions.
         *
         * @return int 
         * @static 
         */ 
        public static function transactionLevel()
        {
            //Method inherited from \Illuminate\Database\Connection            
            return \Illuminate\Database\MySqlConnection::transactionLevel();
        }
        
        /**
         * Execute the callback after a transaction commits.
         *
         * @param callable $callback
         * @return void 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function afterCommit($callback)
        {
            //Method inherited from \Illuminate\Database\Connection            
            \Illuminate\Database\MySqlConnection::afterCommit($callback);
        }
         
    }

    class Event {
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string|array $events
         * @param \Closure|string|array|null $listener
         * @return void 
         * @static 
         */ 
        public static function listen($events, $listener = null)
        {
            \Illuminate\Events\Dispatcher::listen($events, $listener);
        }
        
        /**
         * Determine if a given event has listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */ 
        public static function hasListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::hasListeners($eventName);
        }
        
        /**
         * Determine if the given event has any wildcard listeners.
         *
         * @param string $eventName
         * @return bool 
         * @static 
         */ 
        public static function hasWildcardListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::hasWildcardListeners($eventName);
        }
        
        /**
         * Register an event and payload to be fired later.
         *
         * @param string $event
         * @param object|array $payload
         * @return void 
         * @static 
         */ 
        public static function push($event, $payload = [])
        {
            \Illuminate\Events\Dispatcher::push($event, $payload);
        }
        
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function flush($event)
        {
            \Illuminate\Events\Dispatcher::flush($event);
        }
        
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @return void 
         * @static 
         */ 
        public static function subscribe($subscriber)
        {
            \Illuminate\Events\Dispatcher::subscribe($subscriber);
        }
        
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param string|object $event
         * @param mixed $payload
         * @return mixed 
         * @static 
         */ 
        public static function until($event, $payload = [])
        {
            return \Illuminate\Events\Dispatcher::until($event, $payload);
        }
        
        /**
         * Fire an event and call the listeners.
         *
         * @param string|object $event
         * @param mixed $payload
         * @param bool $halt
         * @return array|null 
         * @static 
         */ 
        public static function dispatch($event, $payload = [], $halt = false)
        {
            return \Illuminate\Events\Dispatcher::dispatch($event, $payload, $halt);
        }
        
        /**
         * Get all of the listeners for a given event name.
         *
         * @param string $eventName
         * @return array 
         * @static 
         */ 
        public static function getListeners($eventName)
        {
            return \Illuminate\Events\Dispatcher::getListeners($eventName);
        }
        
        /**
         * Register an event listener with the dispatcher.
         *
         * @param \Closure|string|array $listener
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
        public static function makeListener($listener, $wildcard = false)
        {
            return \Illuminate\Events\Dispatcher::makeListener($listener, $wildcard);
        }
        
        /**
         * Create a class based listener using the IoC container.
         *
         * @param string $listener
         * @param bool $wildcard
         * @return \Closure 
         * @static 
         */ 
        public static function createClassListener($listener, $wildcard = false)
        {
            return \Illuminate\Events\Dispatcher::createClassListener($listener, $wildcard);
        }
        
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @return void 
         * @static 
         */ 
        public static function forget($event)
        {
            \Illuminate\Events\Dispatcher::forget($event);
        }
        
        /**
         * Forget all of the pushed listeners.
         *
         * @return void 
         * @static 
         */ 
        public static function forgetPushed()
        {
            \Illuminate\Events\Dispatcher::forgetPushed();
        }
        
        /**
         * Set the queue resolver implementation.
         *
         * @param callable $resolver
         * @return \Illuminate\Events\Dispatcher 
         * @static 
         */ 
        public static function setQueueResolver($resolver)
        {
            return \Illuminate\Events\Dispatcher::setQueueResolver($resolver);
        }
        
        /**
         * Gets the raw, unprepared listeners.
         *
         * @return array 
         * @static 
         */ 
        public static function getRawListeners()
        {
            return \Illuminate\Events\Dispatcher::getRawListeners();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Events\Dispatcher::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Events\Dispatcher::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Events\Dispatcher::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Events\Dispatcher::flushMacros();
        }
        
        /**
         * Specify the events that should be dispatched instead of faked.
         *
         * @param array|string $eventsToDispatch
         * @return \Illuminate\Support\Testing\Fakes\EventFake 
         * @static 
         */ 
        public static function except($eventsToDispatch)
        {
            return \Illuminate\Support\Testing\Fakes\EventFake::except($eventsToDispatch);
        }
        
        /**
         * Assert if an event has a listener attached to it.
         *
         * @param string $expectedEvent
         * @param string|array $expectedListener
         * @return void 
         * @static 
         */ 
        public static function assertListening($expectedEvent, $expectedListener)
        {
            \Illuminate\Support\Testing\Fakes\EventFake::assertListening($expectedEvent, $expectedListener);
        }
        
        /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertDispatched($event, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\EventFake::assertDispatched($event, $callback);
        }
        
        /**
         * Assert if an event was dispatched a number of times.
         *
         * @param string $event
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertDispatchedTimes($event, $times = 1)
        {
            \Illuminate\Support\Testing\Fakes\EventFake::assertDispatchedTimes($event, $times);
        }
        
        /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param string|\Closure $event
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotDispatched($event, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\EventFake::assertNotDispatched($event, $callback);
        }
        
        /**
         * Assert that no events were dispatched.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingDispatched()
        {
            \Illuminate\Support\Testing\Fakes\EventFake::assertNothingDispatched();
        }
        
        /**
         * Get all of the events matching a truth-test callback.
         *
         * @param string $event
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function dispatched($event, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\EventFake::dispatched($event, $callback);
        }
        
        /**
         * Determine if the given event has been dispatched.
         *
         * @param string $event
         * @return bool 
         * @static 
         */ 
        public static function hasDispatched($event)
        {
            return \Illuminate\Support\Testing\Fakes\EventFake::hasDispatched($event);
        }
         
    }

    class File {
        
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
            return \Illuminate\Filesystem\Filesystem::exists($path);
        }
        
        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function missing($path)
        {
            return \Illuminate\Filesystem\Filesystem::missing($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @param bool $lock
         * @return string 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function get($path, $lock = false)
        {
            return \Illuminate\Filesystem\Filesystem::get($path, $lock);
        }
        
        /**
         * Get the contents of a file as decoded JSON.
         *
         * @param string $path
         * @param int $flags
         * @param bool $lock
         * @return array 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function json($path, $flags = 0, $lock = false)
        {
            return \Illuminate\Filesystem\Filesystem::json($path, $flags, $lock);
        }
        
        /**
         * Get contents of a file with shared access.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function sharedGet($path)
        {
            return \Illuminate\Filesystem\Filesystem::sharedGet($path);
        }
        
        /**
         * Get the returned value of a file.
         *
         * @param string $path
         * @param array $data
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function getRequire($path, $data = [])
        {
            return \Illuminate\Filesystem\Filesystem::getRequire($path, $data);
        }
        
        /**
         * Require the given file once.
         *
         * @param string $path
         * @param array $data
         * @return mixed 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function requireOnce($path, $data = [])
        {
            return \Illuminate\Filesystem\Filesystem::requireOnce($path, $data);
        }
        
        /**
         * Get the contents of a file one line at a time.
         *
         * @param string $path
         * @return \Illuminate\Support\LazyCollection 
         * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
         * @static 
         */ 
        public static function lines($path)
        {
            return \Illuminate\Filesystem\Filesystem::lines($path);
        }
        
        /**
         * Get the hash of the file at the given path.
         *
         * @param string $path
         * @param string $algorithm
         * @return string 
         * @static 
         */ 
        public static function hash($path, $algorithm = 'md5')
        {
            return \Illuminate\Filesystem\Filesystem::hash($path, $algorithm);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param string $contents
         * @param bool $lock
         * @return int|bool 
         * @static 
         */ 
        public static function put($path, $contents, $lock = false)
        {
            return \Illuminate\Filesystem\Filesystem::put($path, $contents, $lock);
        }
        
        /**
         * Write the contents of a file, replacing it atomically if it already exists.
         *
         * @param string $path
         * @param string $content
         * @param int|null $mode
         * @return void 
         * @static 
         */ 
        public static function replace($path, $content, $mode = null)
        {
            \Illuminate\Filesystem\Filesystem::replace($path, $content, $mode);
        }
        
        /**
         * Replace a given string within a given file.
         *
         * @param array|string $search
         * @param array|string $replace
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function replaceInFile($search, $replace, $path)
        {
            \Illuminate\Filesystem\Filesystem::replaceInFile($search, $replace, $path);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function prepend($path, $data)
        {
            return \Illuminate\Filesystem\Filesystem::prepend($path, $data);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @return int 
         * @static 
         */ 
        public static function append($path, $data)
        {
            return \Illuminate\Filesystem\Filesystem::append($path, $data);
        }
        
        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string $path
         * @param int|null $mode
         * @return mixed 
         * @static 
         */ 
        public static function chmod($path, $mode = null)
        {
            return \Illuminate\Filesystem\Filesystem::chmod($path, $mode);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
            return \Illuminate\Filesystem\Filesystem::delete($paths);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function move($path, $target)
        {
            return \Illuminate\Filesystem\Filesystem::move($path, $target);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $path
         * @param string $target
         * @return bool 
         * @static 
         */ 
        public static function copy($path, $target)
        {
            return \Illuminate\Filesystem\Filesystem::copy($path, $target);
        }
        
        /**
         * Create a symlink to the target file or directory. On Windows, a hard link is created if the target is a file.
         *
         * @param string $target
         * @param string $link
         * @return void 
         * @static 
         */ 
        public static function link($target, $link)
        {
            \Illuminate\Filesystem\Filesystem::link($target, $link);
        }
        
        /**
         * Create a relative symlink to the target file or directory.
         *
         * @param string $target
         * @param string $link
         * @return void 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function relativeLink($target, $link)
        {
            \Illuminate\Filesystem\Filesystem::relativeLink($target, $link);
        }
        
        /**
         * Extract the file name from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function name($path)
        {
            return \Illuminate\Filesystem\Filesystem::name($path);
        }
        
        /**
         * Extract the trailing name component from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function basename($path)
        {
            return \Illuminate\Filesystem\Filesystem::basename($path);
        }
        
        /**
         * Extract the parent directory from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function dirname($path)
        {
            return \Illuminate\Filesystem\Filesystem::dirname($path);
        }
        
        /**
         * Extract the file extension from a file path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function extension($path)
        {
            return \Illuminate\Filesystem\Filesystem::extension($path);
        }
        
        /**
         * Guess the file extension from the mime-type of a given file.
         *
         * @param string $path
         * @return string|null 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function guessExtension($path)
        {
            return \Illuminate\Filesystem\Filesystem::guessExtension($path);
        }
        
        /**
         * Get the file type of a given file.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function type($path)
        {
            return \Illuminate\Filesystem\Filesystem::type($path);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
            return \Illuminate\Filesystem\Filesystem::mimeType($path);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
            return \Illuminate\Filesystem\Filesystem::size($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
            return \Illuminate\Filesystem\Filesystem::lastModified($path);
        }
        
        /**
         * Determine if the given path is a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function isDirectory($directory)
        {
            return \Illuminate\Filesystem\Filesystem::isDirectory($directory);
        }
        
        /**
         * Determine if the given path is a directory that does not contain any other files or directories.
         *
         * @param string $directory
         * @param bool $ignoreDotFiles
         * @return bool 
         * @static 
         */ 
        public static function isEmptyDirectory($directory, $ignoreDotFiles = false)
        {
            return \Illuminate\Filesystem\Filesystem::isEmptyDirectory($directory, $ignoreDotFiles);
        }
        
        /**
         * Determine if the given path is readable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isReadable($path)
        {
            return \Illuminate\Filesystem\Filesystem::isReadable($path);
        }
        
        /**
         * Determine if the given path is writable.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isWritable($path)
        {
            return \Illuminate\Filesystem\Filesystem::isWritable($path);
        }
        
        /**
         * Determine if two files are the same by comparing their hashes.
         *
         * @param string $firstFile
         * @param string $secondFile
         * @return bool 
         * @static 
         */ 
        public static function hasSameHash($firstFile, $secondFile)
        {
            return \Illuminate\Filesystem\Filesystem::hasSameHash($firstFile, $secondFile);
        }
        
        /**
         * Determine if the given path is a file.
         *
         * @param string $file
         * @return bool 
         * @static 
         */ 
        public static function isFile($file)
        {
            return \Illuminate\Filesystem\Filesystem::isFile($file);
        }
        
        /**
         * Find path names matching a given pattern.
         *
         * @param string $pattern
         * @param int $flags
         * @return array 
         * @static 
         */ 
        public static function glob($pattern, $flags = 0)
        {
            return \Illuminate\Filesystem\Filesystem::glob($pattern, $flags);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function files($directory, $hidden = false)
        {
            return \Illuminate\Filesystem\Filesystem::files($directory, $hidden);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string $directory
         * @param bool $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[] 
         * @static 
         */ 
        public static function allFiles($directory, $hidden = false)
        {
            return \Illuminate\Filesystem\Filesystem::allFiles($directory, $hidden);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string $directory
         * @return array 
         * @static 
         */ 
        public static function directories($directory)
        {
            return \Illuminate\Filesystem\Filesystem::directories($directory);
        }
        
        /**
         * Ensure a directory exists.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @return void 
         * @static 
         */ 
        public static function ensureDirectoryExists($path, $mode = 493, $recursive = true)
        {
            \Illuminate\Filesystem\Filesystem::ensureDirectoryExists($path, $mode, $recursive);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @param int $mode
         * @param bool $recursive
         * @param bool $force
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
            return \Illuminate\Filesystem\Filesystem::makeDirectory($path, $mode, $recursive, $force);
        }
        
        /**
         * Move a directory.
         *
         * @param string $from
         * @param string $to
         * @param bool $overwrite
         * @return bool 
         * @static 
         */ 
        public static function moveDirectory($from, $to, $overwrite = false)
        {
            return \Illuminate\Filesystem\Filesystem::moveDirectory($from, $to, $overwrite);
        }
        
        /**
         * Copy a directory from one location to another.
         *
         * @param string $directory
         * @param string $destination
         * @param int|null $options
         * @return bool 
         * @static 
         */ 
        public static function copyDirectory($directory, $destination, $options = null)
        {
            return \Illuminate\Filesystem\Filesystem::copyDirectory($directory, $destination, $options);
        }
        
        /**
         * Recursively delete a directory.
         * 
         * The directory itself may be optionally preserved.
         *
         * @param string $directory
         * @param bool $preserve
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory, $preserve = false)
        {
            return \Illuminate\Filesystem\Filesystem::deleteDirectory($directory, $preserve);
        }
        
        /**
         * Remove all of the directories within a given directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectories($directory)
        {
            return \Illuminate\Filesystem\Filesystem::deleteDirectories($directory);
        }
        
        /**
         * Empty the specified directory of all files and folders.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function cleanDirectory($directory)
        {
            return \Illuminate\Filesystem\Filesystem::cleanDirectory($directory);
        }
        
        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TWhenParameter)|TWhenParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TWhenReturnType 
         * @static 
         */ 
        public static function when($value = null, $callback = null, $default = null)
        {
            return \Illuminate\Filesystem\Filesystem::when($value, $callback, $default);
        }
        
        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TUnlessReturnType 
         * @static 
         */ 
        public static function unless($value = null, $callback = null, $default = null)
        {
            return \Illuminate\Filesystem\Filesystem::unless($value, $callback, $default);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\Filesystem::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Filesystem\Filesystem::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\Filesystem::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Filesystem\Filesystem::flushMacros();
        }
         
    }

    class Gate {
        
        /**
         * Determine if a given ability has been defined.
         *
         * @param string|array $ability
         * @return bool 
         * @static 
         */ 
        public static function has($ability)
        {
            return \Illuminate\Auth\Access\Gate::has($ability);
        }
        
        /**
         * Perform an on-demand authorization check. Throw an authorization exception if the condition or callback is false.
         *
         * @param \Illuminate\Auth\Access\Response|\Closure|bool $condition
         * @param string|null $message
         * @param string|null $code
         * @return \Illuminate\Auth\Access\Response 
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static 
         */ 
        public static function allowIf($condition, $message = null, $code = null)
        {
            return \Illuminate\Auth\Access\Gate::allowIf($condition, $message, $code);
        }
        
        /**
         * Perform an on-demand authorization check. Throw an authorization exception if the condition or callback is true.
         *
         * @param \Illuminate\Auth\Access\Response|\Closure|bool $condition
         * @param string|null $message
         * @param string|null $code
         * @return \Illuminate\Auth\Access\Response 
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static 
         */ 
        public static function denyIf($condition, $message = null, $code = null)
        {
            return \Illuminate\Auth\Access\Gate::denyIf($condition, $message, $code);
        }
        
        /**
         * Define a new ability.
         *
         * @param string $ability
         * @param callable|array|string $callback
         * @return \Illuminate\Auth\Access\Gate 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function define($ability, $callback)
        {
            return \Illuminate\Auth\Access\Gate::define($ability, $callback);
        }
        
        /**
         * Define abilities for a resource.
         *
         * @param string $name
         * @param string $class
         * @param array|null $abilities
         * @return \Illuminate\Auth\Access\Gate 
         * @static 
         */ 
        public static function resource($name, $class, $abilities = null)
        {
            return \Illuminate\Auth\Access\Gate::resource($name, $class, $abilities);
        }
        
        /**
         * Define a policy class for a given class type.
         *
         * @param string $class
         * @param string $policy
         * @return \Illuminate\Auth\Access\Gate 
         * @static 
         */ 
        public static function policy($class, $policy)
        {
            return \Illuminate\Auth\Access\Gate::policy($class, $policy);
        }
        
        /**
         * Register a callback to run before all Gate checks.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate 
         * @static 
         */ 
        public static function before($callback)
        {
            return \Illuminate\Auth\Access\Gate::before($callback);
        }
        
        /**
         * Register a callback to run after all Gate checks.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate 
         * @static 
         */ 
        public static function after($callback)
        {
            return \Illuminate\Auth\Access\Gate::after($callback);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function allows($ability, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::allows($ability, $arguments);
        }
        
        /**
         * Determine if the given ability should be denied for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function denies($ability, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::denies($ability, $arguments);
        }
        
        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function check($abilities, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::check($abilities, $arguments);
        }
        
        /**
         * Determine if any one of the given abilities should be granted for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function any($abilities, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::any($abilities, $arguments);
        }
        
        /**
         * Determine if all of the given abilities should be denied for the current user.
         *
         * @param \Illuminate\Auth\Access\iterable|string $abilities
         * @param array|mixed $arguments
         * @return bool 
         * @static 
         */ 
        public static function none($abilities, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::none($abilities, $arguments);
        }
        
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return \Illuminate\Auth\Access\Response 
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static 
         */ 
        public static function authorize($ability, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::authorize($ability, $arguments);
        }
        
        /**
         * Inspect the user for the given ability.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return \Illuminate\Auth\Access\Response 
         * @static 
         */ 
        public static function inspect($ability, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::inspect($ability, $arguments);
        }
        
        /**
         * Get the raw result from the authorization callback.
         *
         * @param string $ability
         * @param array|mixed $arguments
         * @return mixed 
         * @throws \Illuminate\Auth\Access\AuthorizationException
         * @static 
         */ 
        public static function raw($ability, $arguments = [])
        {
            return \Illuminate\Auth\Access\Gate::raw($ability, $arguments);
        }
        
        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
         * @return mixed 
         * @static 
         */ 
        public static function getPolicyFor($class)
        {
            return \Illuminate\Auth\Access\Gate::getPolicyFor($class);
        }
        
        /**
         * Specify a callback to be used to guess policy names.
         *
         * @param callable $callback
         * @return \Illuminate\Auth\Access\Gate 
         * @static 
         */ 
        public static function guessPolicyNamesUsing($callback)
        {
            return \Illuminate\Auth\Access\Gate::guessPolicyNamesUsing($callback);
        }
        
        /**
         * Build a policy class instance of the given type.
         *
         * @param object|string $class
         * @return mixed 
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static 
         */ 
        public static function resolvePolicy($class)
        {
            return \Illuminate\Auth\Access\Gate::resolvePolicy($class);
        }
        
        /**
         * Get a gate instance for the given user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable|mixed $user
         * @return static 
         * @static 
         */ 
        public static function forUser($user)
        {
            return \Illuminate\Auth\Access\Gate::forUser($user);
        }
        
        /**
         * Get all of the defined abilities.
         *
         * @return array 
         * @static 
         */ 
        public static function abilities()
        {
            return \Illuminate\Auth\Access\Gate::abilities();
        }
        
        /**
         * Get all of the defined policies.
         *
         * @return array 
         * @static 
         */ 
        public static function policies()
        {
            return \Illuminate\Auth\Access\Gate::policies();
        }
        
        /**
         * Set the default denial response for gates and policies.
         *
         * @param \Illuminate\Auth\Access\Response $response
         * @return \Illuminate\Auth\Access\Gate 
         * @static 
         */ 
        public static function defaultDenialResponse($response)
        {
            return \Illuminate\Auth\Access\Gate::defaultDenialResponse($response);
        }
        
        /**
         * Set the container instance used by the gate.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Auth\Access\Gate 
         * @static 
         */ 
        public static function setContainer($container)
        {
            return \Illuminate\Auth\Access\Gate::setContainer($container);
        }
        
        /**
         * Deny with a HTTP status code.
         *
         * @param int $status
         * @param string|null $message
         * @param int|null $code
         * @return \Illuminate\Auth\Access\Response 
         * @static 
         */ 
        public static function denyWithStatus($status, $message = null, $code = null)
        {
            return \Illuminate\Auth\Access\Gate::denyWithStatus($status, $message, $code);
        }
        
        /**
         * Deny with a 404 HTTP status code.
         *
         * @param string|null $message
         * @param int|null $code
         * @return \Illuminate\Auth\Access\Response 
         * @static 
         */ 
        public static function denyAsNotFound($message = null, $code = null)
        {
            return \Illuminate\Auth\Access\Gate::denyAsNotFound($message, $code);
        }
         
    }

    class Hash {
        
        /**
         * Create an instance of the Bcrypt hash Driver.
         *
         * @return \Illuminate\Hashing\BcryptHasher 
         * @static 
         */ 
        public static function createBcryptDriver()
        {
            return \Illuminate\Hashing\HashManager::createBcryptDriver();
        }
        
        /**
         * Create an instance of the Argon2i hash Driver.
         *
         * @return \Illuminate\Hashing\ArgonHasher 
         * @static 
         */ 
        public static function createArgonDriver()
        {
            return \Illuminate\Hashing\HashManager::createArgonDriver();
        }
        
        /**
         * Create an instance of the Argon2id hash Driver.
         *
         * @return \Illuminate\Hashing\Argon2IdHasher 
         * @static 
         */ 
        public static function createArgon2idDriver()
        {
            return \Illuminate\Hashing\HashManager::createArgon2idDriver();
        }
        
        /**
         * Get information about the given hashed value.
         *
         * @param string $hashedValue
         * @return array 
         * @static 
         */ 
        public static function info($hashedValue)
        {
            return \Illuminate\Hashing\HashManager::info($hashedValue);
        }
        
        /**
         * Hash the given value.
         *
         * @param string $value
         * @param array $options
         * @return string 
         * @static 
         */ 
        public static function make($value, $options = [])
        {
            return \Illuminate\Hashing\HashManager::make($value, $options);
        }
        
        /**
         * Check the given plain value against a hash.
         *
         * @param string $value
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function check($value, $hashedValue, $options = [])
        {
            return \Illuminate\Hashing\HashManager::check($value, $hashedValue, $options);
        }
        
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param string $hashedValue
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function needsRehash($hashedValue, $options = [])
        {
            return \Illuminate\Hashing\HashManager::needsRehash($hashedValue, $options);
        }
        
        /**
         * Determine if a given string is already hashed.
         *
         * @param string $value
         * @return bool 
         * @static 
         */ 
        public static function isHashed($value)
        {
            return \Illuminate\Hashing\HashManager::isHashed($value);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Hashing\HashManager::getDefaultDriver();
        }
        
        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Hashing\HashManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Hashing\HashManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Hashing\HashManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Hashing\HashManager::getDrivers();
        }
        
        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Hashing\HashManager::getContainer();
        }
        
        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Hashing\HashManager 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Hashing\HashManager::setContainer($container);
        }
        
        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Hashing\HashManager 
         * @static 
         */ 
        public static function forgetDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Hashing\HashManager::forgetDrivers();
        }
         
    }

    class Http {
        
        /**
         * Add middleware to apply to every request.
         *
         * @param callable $middleware
         * @return \Illuminate\Http\Client\Factory 
         * @static 
         */ 
        public static function globalMiddleware($middleware)
        {
            return \Illuminate\Http\Client\Factory::globalMiddleware($middleware);
        }
        
        /**
         * Add request middleware to apply to every request.
         *
         * @param callable $middleware
         * @return \Illuminate\Http\Client\Factory 
         * @static 
         */ 
        public static function globalRequestMiddleware($middleware)
        {
            return \Illuminate\Http\Client\Factory::globalRequestMiddleware($middleware);
        }
        
        /**
         * Add response middleware to apply to every request.
         *
         * @param callable $middleware
         * @return \Illuminate\Http\Client\Factory 
         * @static 
         */ 
        public static function globalResponseMiddleware($middleware)
        {
            return \Illuminate\Http\Client\Factory::globalResponseMiddleware($middleware);
        }
        
        /**
         * Create a new response instance for use during stubbing.
         *
         * @param array|string|null $body
         * @param int $status
         * @param array $headers
         * @return \GuzzleHttp\Promise\PromiseInterface 
         * @static 
         */ 
        public static function response($body = null, $status = 200, $headers = [])
        {
            return \Illuminate\Http\Client\Factory::response($body, $status, $headers);
        }
        
        /**
         * Get an invokable object that returns a sequence of responses in order for use during stubbing.
         *
         * @param array $responses
         * @return \Illuminate\Http\Client\ResponseSequence 
         * @static 
         */ 
        public static function sequence($responses = [])
        {
            return \Illuminate\Http\Client\Factory::sequence($responses);
        }
        
        /**
         * Register a stub callable that will intercept requests and be able to return stub responses.
         *
         * @param callable|array|null $callback
         * @return \Illuminate\Http\Client\Factory 
         * @static 
         */ 
        public static function fake($callback = null)
        {
            return \Illuminate\Http\Client\Factory::fake($callback);
        }
        
        /**
         * Register a response sequence for the given URL pattern.
         *
         * @param string $url
         * @return \Illuminate\Http\Client\ResponseSequence 
         * @static 
         */ 
        public static function fakeSequence($url = '*')
        {
            return \Illuminate\Http\Client\Factory::fakeSequence($url);
        }
        
        /**
         * Stub the given URL using the given callback.
         *
         * @param string $url
         * @param \Illuminate\Http\Client\Response|\GuzzleHttp\Promise\PromiseInterface|callable $callback
         * @return \Illuminate\Http\Client\Factory 
         * @static 
         */ 
        public static function stubUrl($url, $callback)
        {
            return \Illuminate\Http\Client\Factory::stubUrl($url, $callback);
        }
        
        /**
         * Indicate that an exception should be thrown if any request is not faked.
         *
         * @param bool $prevent
         * @return \Illuminate\Http\Client\Factory 
         * @static 
         */ 
        public static function preventStrayRequests($prevent = true)
        {
            return \Illuminate\Http\Client\Factory::preventStrayRequests($prevent);
        }
        
        /**
         * Indicate that an exception should not be thrown if any request is not faked.
         *
         * @return \Illuminate\Http\Client\Factory 
         * @static 
         */ 
        public static function allowStrayRequests()
        {
            return \Illuminate\Http\Client\Factory::allowStrayRequests();
        }
        
        /**
         * Record a request response pair.
         *
         * @param \Illuminate\Http\Client\Request $request
         * @param \Illuminate\Http\Client\Response $response
         * @return void 
         * @static 
         */ 
        public static function recordRequestResponsePair($request, $response)
        {
            \Illuminate\Http\Client\Factory::recordRequestResponsePair($request, $response);
        }
        
        /**
         * Assert that a request / response pair was recorded matching a given truth test.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function assertSent($callback)
        {
            \Illuminate\Http\Client\Factory::assertSent($callback);
        }
        
        /**
         * Assert that the given request was sent in the given order.
         *
         * @param array $callbacks
         * @return void 
         * @static 
         */ 
        public static function assertSentInOrder($callbacks)
        {
            \Illuminate\Http\Client\Factory::assertSentInOrder($callbacks);
        }
        
        /**
         * Assert that a request / response pair was not recorded matching a given truth test.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotSent($callback)
        {
            \Illuminate\Http\Client\Factory::assertNotSent($callback);
        }
        
        /**
         * Assert that no request / response pair was recorded.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingSent()
        {
            \Illuminate\Http\Client\Factory::assertNothingSent();
        }
        
        /**
         * Assert how many requests have been recorded.
         *
         * @param int $count
         * @return void 
         * @static 
         */ 
        public static function assertSentCount($count)
        {
            \Illuminate\Http\Client\Factory::assertSentCount($count);
        }
        
        /**
         * Assert that every created response sequence is empty.
         *
         * @return void 
         * @static 
         */ 
        public static function assertSequencesAreEmpty()
        {
            \Illuminate\Http\Client\Factory::assertSequencesAreEmpty();
        }
        
        /**
         * Get a collection of the request / response pairs matching the given truth test.
         *
         * @param callable $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function recorded($callback = null)
        {
            return \Illuminate\Http\Client\Factory::recorded($callback);
        }
        
        /**
         * Get the current event dispatcher implementation.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher|null 
         * @static 
         */ 
        public static function getDispatcher()
        {
            return \Illuminate\Http\Client\Factory::getDispatcher();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Client\Factory::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Http\Client\Factory::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Client\Factory::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Http\Client\Factory::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Http\Client\Factory::macroCall($method, $parameters);
        }
         
    }

    class Lang {
        
        /**
         * Determine if a translation exists for a given locale.
         *
         * @param string $key
         * @param string|null $locale
         * @return bool 
         * @static 
         */ 
        public static function hasForLocale($key, $locale = null)
        {
            return \Illuminate\Translation\Translator::hasForLocale($key, $locale);
        }
        
        /**
         * Determine if a translation exists.
         *
         * @param string $key
         * @param string|null $locale
         * @param bool $fallback
         * @return bool 
         * @static 
         */ 
        public static function has($key, $locale = null, $fallback = true)
        {
            return \Illuminate\Translation\Translator::has($key, $locale, $fallback);
        }
        
        /**
         * Get the translation for the given key.
         *
         * @param string $key
         * @param array $replace
         * @param string|null $locale
         * @param bool $fallback
         * @return string|array 
         * @static 
         */ 
        public static function get($key, $replace = [], $locale = null, $fallback = true)
        {
            return \Illuminate\Translation\Translator::get($key, $replace, $locale, $fallback);
        }
        
        /**
         * Get a translation according to an integer value.
         *
         * @param string $key
         * @param \Countable|int|array $number
         * @param array $replace
         * @param string|null $locale
         * @return string 
         * @static 
         */ 
        public static function choice($key, $number, $replace = [], $locale = null)
        {
            return \Illuminate\Translation\Translator::choice($key, $number, $replace, $locale);
        }
        
        /**
         * Add translation lines to the given locale.
         *
         * @param array $lines
         * @param string $locale
         * @param string $namespace
         * @return void 
         * @static 
         */ 
        public static function addLines($lines, $locale, $namespace = '*')
        {
            \Illuminate\Translation\Translator::addLines($lines, $locale, $namespace);
        }
        
        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function load($namespace, $group, $locale)
        {
            \Illuminate\Translation\Translator::load($namespace, $group, $locale);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @return void 
         * @static 
         */ 
        public static function addNamespace($namespace, $hint)
        {
            \Illuminate\Translation\Translator::addNamespace($namespace, $hint);
        }
        
        /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
         * @return void 
         * @static 
         */ 
        public static function addJsonPath($path)
        {
            \Illuminate\Translation\Translator::addJsonPath($path);
        }
        
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param string $key
         * @return array 
         * @static 
         */ 
        public static function parseKey($key)
        {
            return \Illuminate\Translation\Translator::parseKey($key);
        }
        
        /**
         * Specify a callback that should be invoked to determined the applicable locale array.
         *
         * @param callable $callback
         * @return void 
         * @static 
         */ 
        public static function determineLocalesUsing($callback)
        {
            \Illuminate\Translation\Translator::determineLocalesUsing($callback);
        }
        
        /**
         * Get the message selector instance.
         *
         * @return \Illuminate\Translation\MessageSelector 
         * @static 
         */ 
        public static function getSelector()
        {
            return \Illuminate\Translation\Translator::getSelector();
        }
        
        /**
         * Set the message selector instance.
         *
         * @param \Illuminate\Translation\MessageSelector $selector
         * @return void 
         * @static 
         */ 
        public static function setSelector($selector)
        {
            \Illuminate\Translation\Translator::setSelector($selector);
        }
        
        /**
         * Get the language line loader implementation.
         *
         * @return \Illuminate\Contracts\Translation\Loader 
         * @static 
         */ 
        public static function getLoader()
        {
            return \Illuminate\Translation\Translator::getLoader();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function locale()
        {
            return \Illuminate\Translation\Translator::locale();
        }
        
        /**
         * Get the default locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getLocale()
        {
            return \Illuminate\Translation\Translator::getLocale();
        }
        
        /**
         * Set the default locale.
         *
         * @param string $locale
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function setLocale($locale)
        {
            \Illuminate\Translation\Translator::setLocale($locale);
        }
        
        /**
         * Get the fallback locale being used.
         *
         * @return string 
         * @static 
         */ 
        public static function getFallback()
        {
            return \Illuminate\Translation\Translator::getFallback();
        }
        
        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @return void 
         * @static 
         */ 
        public static function setFallback($fallback)
        {
            \Illuminate\Translation\Translator::setFallback($fallback);
        }
        
        /**
         * Set the loaded translation groups.
         *
         * @param array $loaded
         * @return void 
         * @static 
         */ 
        public static function setLoaded($loaded)
        {
            \Illuminate\Translation\Translator::setLoaded($loaded);
        }
        
        /**
         * Add a handler to be executed in order to format a given class to a string during translation replacements.
         *
         * @param callable|string $class
         * @param callable|null $handler
         * @return void 
         * @static 
         */ 
        public static function stringable($class, $handler = null)
        {
            \Illuminate\Translation\Translator::stringable($class, $handler);
        }
        
        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array $parsed
         * @return void 
         * @static 
         */ 
        public static function setParsedKey($key, $parsed)
        {
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            \Illuminate\Translation\Translator::setParsedKey($key, $parsed);
        }
        
        /**
         * Flush the cache of parsed keys.
         *
         * @return void 
         * @static 
         */ 
        public static function flushParsedKeys()
        {
            //Method inherited from \Illuminate\Support\NamespacedItemResolver            
            \Illuminate\Translation\Translator::flushParsedKeys();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Translation\Translator::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Translation\Translator::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Translation\Translator::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Translation\Translator::flushMacros();
        }
         
    }

    class Log {
        
        /**
         * Build an on-demand log channel.
         *
         * @param array $config
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
        public static function build($config)
        {
            return \Illuminate\Log\LogManager::build($config);
        }
        
        /**
         * Create a new, on-demand aggregate logger instance.
         *
         * @param array $channels
         * @param string|null $channel
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
        public static function stack($channels, $channel = null)
        {
            return \Illuminate\Log\LogManager::stack($channels, $channel);
        }
        
        /**
         * Get a log channel instance.
         *
         * @param string|null $channel
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
        public static function channel($channel = null)
        {
            return \Illuminate\Log\LogManager::channel($channel);
        }
        
        /**
         * Get a log driver instance.
         *
         * @param string|null $driver
         * @return \Psr\Log\LoggerInterface 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            return \Illuminate\Log\LogManager::driver($driver);
        }
        
        /**
         * Share context across channels and stacks.
         *
         * @param array $context
         * @return \Illuminate\Log\LogManager 
         * @static 
         */ 
        public static function shareContext($context)
        {
            return \Illuminate\Log\LogManager::shareContext($context);
        }
        
        /**
         * The context shared across channels and stacks.
         *
         * @return array 
         * @static 
         */ 
        public static function sharedContext()
        {
            return \Illuminate\Log\LogManager::sharedContext();
        }
        
        /**
         * Flush the shared context.
         *
         * @return \Illuminate\Log\LogManager 
         * @static 
         */ 
        public static function flushSharedContext()
        {
            return \Illuminate\Log\LogManager::flushSharedContext();
        }
        
        /**
         * Get the default log driver name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Log\LogManager::getDefaultDriver();
        }
        
        /**
         * Set the default log driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Log\LogManager::setDefaultDriver($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Log\LogManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Log\LogManager::extend($driver, $callback);
        }
        
        /**
         * Unset the given channel instance.
         *
         * @param string|null $driver
         * @return void 
         * @static 
         */ 
        public static function forgetChannel($driver = null)
        {
            \Illuminate\Log\LogManager::forgetChannel($driver);
        }
        
        /**
         * Get all of the resolved log channels.
         *
         * @return array 
         * @static 
         */ 
        public static function getChannels()
        {
            return \Illuminate\Log\LogManager::getChannels();
        }
        
        /**
         * System is unusable.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function emergency($message, $context = [])
        {
            \Illuminate\Log\LogManager::emergency($message, $context);
        }
        
        /**
         * Action must be taken immediately.
         * 
         * Example: Entire website down, database unavailable, etc. This should
         * trigger the SMS alerts and wake you up.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function alert($message, $context = [])
        {
            \Illuminate\Log\LogManager::alert($message, $context);
        }
        
        /**
         * Critical conditions.
         * 
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function critical($message, $context = [])
        {
            \Illuminate\Log\LogManager::critical($message, $context);
        }
        
        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function error($message, $context = [])
        {
            \Illuminate\Log\LogManager::error($message, $context);
        }
        
        /**
         * Exceptional occurrences that are not errors.
         * 
         * Example: Use of deprecated APIs, poor use of an API, undesirable things
         * that are not necessarily wrong.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function warning($message, $context = [])
        {
            \Illuminate\Log\LogManager::warning($message, $context);
        }
        
        /**
         * Normal but significant events.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function notice($message, $context = [])
        {
            \Illuminate\Log\LogManager::notice($message, $context);
        }
        
        /**
         * Interesting events.
         * 
         * Example: User logs in, SQL logs.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function info($message, $context = [])
        {
            \Illuminate\Log\LogManager::info($message, $context);
        }
        
        /**
         * Detailed debug information.
         *
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function debug($message, $context = [])
        {
            \Illuminate\Log\LogManager::debug($message, $context);
        }
        
        /**
         * Logs with an arbitrary level.
         *
         * @param mixed $level
         * @param string $message
         * @param array $context
         * @return void 
         * @static 
         */ 
        public static function log($level, $message, $context = [])
        {
            \Illuminate\Log\LogManager::log($level, $message, $context);
        }
         
    }

    class Mail {
        
        /**
         * Get a mailer instance by name.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Mail\Mailer 
         * @static 
         */ 
        public static function mailer($name = null)
        {
            return \Illuminate\Mail\MailManager::mailer($name);
        }
        
        /**
         * Get a mailer driver instance.
         *
         * @param string|null $driver
         * @return \Illuminate\Mail\Mailer 
         * @static 
         */ 
        public static function driver($driver = null)
        {
            return \Illuminate\Mail\MailManager::driver($driver);
        }
        
        /**
         * Create a new transport instance.
         *
         * @param array $config
         * @return \Symfony\Component\Mailer\Transport\TransportInterface 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function createSymfonyTransport($config)
        {
            return \Illuminate\Mail\MailManager::createSymfonyTransport($config);
        }
        
        /**
         * Get the default mail driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Mail\MailManager::getDefaultDriver();
        }
        
        /**
         * Set the default mail driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Mail\MailManager::setDefaultDriver($name);
        }
        
        /**
         * Disconnect the given mailer and remove from local cache.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Mail\MailManager::purge($name);
        }
        
        /**
         * Register a custom transport creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Mail\MailManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Mail\MailManager::extend($driver, $callback);
        }
        
        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application 
         * @static 
         */ 
        public static function getApplication()
        {
            return \Illuminate\Mail\MailManager::getApplication();
        }
        
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Mail\MailManager 
         * @static 
         */ 
        public static function setApplication($app)
        {
            return \Illuminate\Mail\MailManager::setApplication($app);
        }
        
        /**
         * Forget all of the resolved mailer instances.
         *
         * @return \Illuminate\Mail\MailManager 
         * @static 
         */ 
        public static function forgetMailers()
        {
            return \Illuminate\Mail\MailManager::forgetMailers();
        }
        
        /**
         * Assert if a mailable was sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertSent($mailable, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertSent($mailable, $callback);
        }
        
        /**
         * Determine if a mailable was not sent or queued to be sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotOutgoing($mailable, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertNotOutgoing($mailable, $callback);
        }
        
        /**
         * Determine if a mailable was not sent based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotSent($mailable, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertNotSent($mailable, $callback);
        }
        
        /**
         * Assert that no mailables were sent or queued to be sent.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingOutgoing()
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertNothingOutgoing();
        }
        
        /**
         * Assert that no mailables were sent.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingSent()
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertNothingSent();
        }
        
        /**
         * Assert if a mailable was queued based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertQueued($mailable, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertQueued($mailable, $callback);
        }
        
        /**
         * Determine if a mailable was not queued based on a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotQueued($mailable, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertNotQueued($mailable, $callback);
        }
        
        /**
         * Assert that no mailables were queued.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingQueued()
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertNothingQueued();
        }
        
        /**
         * Assert the total number of mailables that were sent.
         *
         * @param int $count
         * @return void 
         * @static 
         */ 
        public static function assertSentCount($count)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertSentCount($count);
        }
        
        /**
         * Assert the total number of mailables that were queued.
         *
         * @param int $count
         * @return void 
         * @static 
         */ 
        public static function assertQueuedCount($count)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertQueuedCount($count);
        }
        
        /**
         * Assert the total number of mailables that were sent or queued.
         *
         * @param int $count
         * @return void 
         * @static 
         */ 
        public static function assertOutgoingCount($count)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::assertOutgoingCount($count);
        }
        
        /**
         * Get all of the mailables matching a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function sent($mailable, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::sent($mailable, $callback);
        }
        
        /**
         * Determine if the given mailable has been sent.
         *
         * @param string $mailable
         * @return bool 
         * @static 
         */ 
        public static function hasSent($mailable)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::hasSent($mailable);
        }
        
        /**
         * Get all of the queued mailables matching a truth-test callback.
         *
         * @param string|\Closure $mailable
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function queued($mailable, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::queued($mailable, $callback);
        }
        
        /**
         * Determine if the given mailable has been queued.
         *
         * @param string $mailable
         * @return bool 
         * @static 
         */ 
        public static function hasQueued($mailable)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::hasQueued($mailable);
        }
        
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function to($users)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::to($users);
        }
        
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function cc($users)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::cc($users);
        }
        
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @param mixed $users
         * @return \Illuminate\Mail\PendingMail 
         * @static 
         */ 
        public static function bcc($users)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::bcc($users);
        }
        
        /**
         * Send a new message with only a raw text part.
         *
         * @param string $text
         * @param \Closure|string $callback
         * @return void 
         * @static 
         */ 
        public static function raw($text, $callback)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::raw($text, $callback);
        }
        
        /**
         * Send a new message using a view.
         *
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param array $data
         * @param \Closure|string|null $callback
         * @return void 
         * @static 
         */ 
        public static function send($view, $data = [], $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\MailFake::send($view, $data, $callback);
        }
        
        /**
         * Queue a new e-mail message for sending.
         *
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function queue($view, $queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::queue($view, $queue);
        }
        
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param \Illuminate\Contracts\Mail\Mailable|string|array $view
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $view, $queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\MailFake::later($delay, $view, $queue);
        }
         
    }

    class Notification {
        
        /**
         * Send the given notification to the given notifiable entities.
         *
         * @param \Illuminate\Support\Collection|array|mixed $notifiables
         * @param mixed $notification
         * @return void 
         * @static 
         */ 
        public static function send($notifiables, $notification)
        {
            \Illuminate\Notifications\ChannelManager::send($notifiables, $notification);
        }
        
        /**
         * Send the given notification immediately.
         *
         * @param \Illuminate\Support\Collection|array|mixed $notifiables
         * @param mixed $notification
         * @param array|null $channels
         * @return void 
         * @static 
         */ 
        public static function sendNow($notifiables, $notification, $channels = null)
        {
            \Illuminate\Notifications\ChannelManager::sendNow($notifiables, $notification, $channels);
        }
        
        /**
         * Get a channel instance.
         *
         * @param string|null $name
         * @return mixed 
         * @static 
         */ 
        public static function channel($name = null)
        {
            return \Illuminate\Notifications\ChannelManager::channel($name);
        }
        
        /**
         * Get the default channel driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Notifications\ChannelManager::getDefaultDriver();
        }
        
        /**
         * Get the default channel driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function deliversVia()
        {
            return \Illuminate\Notifications\ChannelManager::deliversVia();
        }
        
        /**
         * Set the default channel driver name.
         *
         * @param string $channel
         * @return void 
         * @static 
         */ 
        public static function deliverVia($channel)
        {
            \Illuminate\Notifications\ChannelManager::deliverVia($channel);
        }
        
        /**
         * Set the locale of notifications.
         *
         * @param string $locale
         * @return \Illuminate\Notifications\ChannelManager 
         * @static 
         */ 
        public static function locale($locale)
        {
            return \Illuminate\Notifications\ChannelManager::locale($locale);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Notifications\ChannelManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::getDrivers();
        }
        
        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::getContainer();
        }
        
        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Notifications\ChannelManager 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::setContainer($container);
        }
        
        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Notifications\ChannelManager 
         * @static 
         */ 
        public static function forgetDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Notifications\ChannelManager::forgetDrivers();
        }
        
        /**
         * Assert if a notification was sent on-demand based on a truth-test callback.
         *
         * @param string|\Closure $notification
         * @param callable|null $callback
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function assertSentOnDemand($notification, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentOnDemand($notification, $callback);
        }
        
        /**
         * Assert if a notification was sent based on a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string|\Closure $notification
         * @param callable|null $callback
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function assertSentTo($notifiable, $notification, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentTo($notifiable, $notification, $callback);
        }
        
        /**
         * Assert if a notification was sent on-demand a number of times.
         *
         * @param string $notification
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertSentOnDemandTimes($notification, $times = 1)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentOnDemandTimes($notification, $times);
        }
        
        /**
         * Assert if a notification was sent a number of times.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @param int $times
         * @return void 
         * @static 
         */ 
        public static function assertSentToTimes($notifiable, $notification, $times = 1)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentToTimes($notifiable, $notification, $times);
        }
        
        /**
         * Determine if a notification was sent based on a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string|\Closure $notification
         * @param callable|null $callback
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function assertNotSentTo($notifiable, $notification, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertNotSentTo($notifiable, $notification, $callback);
        }
        
        /**
         * Assert that no notifications were sent.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingSent()
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertNothingSent();
        }
        
        /**
         * Assert that no notifications were sent to the given notifiable.
         *
         * @param mixed $notifiable
         * @return void 
         * @throws \Exception
         * @static 
         */ 
        public static function assertNothingSentTo($notifiable)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertNothingSentTo($notifiable);
        }
        
        /**
         * Assert the total amount of times a notification was sent.
         *
         * @param string $notification
         * @param int $expectedCount
         * @return void 
         * @static 
         */ 
        public static function assertSentTimes($notification, $expectedCount)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertSentTimes($notification, $expectedCount);
        }
        
        /**
         * Assert the total count of notification that were sent.
         *
         * @param int $expectedCount
         * @return void 
         * @static 
         */ 
        public static function assertCount($expectedCount)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::assertCount($expectedCount);
        }
        
        /**
         * Get all of the notifications matching a truth-test callback.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function sent($notifiable, $notification, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\NotificationFake::sent($notifiable, $notification, $callback);
        }
        
        /**
         * Determine if there are more notifications left to inspect.
         *
         * @param mixed $notifiable
         * @param string $notification
         * @return bool 
         * @static 
         */ 
        public static function hasSent($notifiable, $notification)
        {
            return \Illuminate\Support\Testing\Fakes\NotificationFake::hasSent($notifiable, $notification);
        }
        
        /**
         * Get the notifications that have been sent.
         *
         * @return array 
         * @static 
         */ 
        public static function sentNotifications()
        {
            return \Illuminate\Support\Testing\Fakes\NotificationFake::sentNotifications();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Support\Testing\Fakes\NotificationFake::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Support\Testing\Fakes\NotificationFake::flushMacros();
        }
         
    }

    class Password {
        
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Auth\PasswordBroker 
         * @static 
         */ 
        public static function broker($name = null)
        {
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::broker($name);
        }
        
        /**
         * Get the default password broker name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Auth\Passwords\PasswordBrokerManager::getDefaultDriver();
        }
        
        /**
         * Set the default password broker name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Auth\Passwords\PasswordBrokerManager::setDefaultDriver($name);
        }
         
    }

    class Process {
        
        /**
         * Create a new fake process response for testing purposes.
         *
         * @param array|string $output
         * @param array|string $errorOutput
         * @param int $exitCode
         * @return \Illuminate\Process\FakeProcessResult 
         * @static 
         */ 
        public static function result($output = '', $errorOutput = '', $exitCode = 0)
        {
            return \Illuminate\Process\Factory::result($output, $errorOutput, $exitCode);
        }
        
        /**
         * Begin describing a fake process lifecycle.
         *
         * @return \Illuminate\Process\FakeProcessDescription 
         * @static 
         */ 
        public static function describe()
        {
            return \Illuminate\Process\Factory::describe();
        }
        
        /**
         * Begin describing a fake process sequence.
         *
         * @param array $processes
         * @return \Illuminate\Process\FakeProcessSequence 
         * @static 
         */ 
        public static function sequence($processes = [])
        {
            return \Illuminate\Process\Factory::sequence($processes);
        }
        
        /**
         * Indicate that the process factory should fake processes.
         *
         * @param \Closure|array|null $callback
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function fake($callback = null)
        {
            return \Illuminate\Process\Factory::fake($callback);
        }
        
        /**
         * Determine if the process factory has fake process handlers and is recording processes.
         *
         * @return bool 
         * @static 
         */ 
        public static function isRecording()
        {
            return \Illuminate\Process\Factory::isRecording();
        }
        
        /**
         * Record the given process if processes should be recorded.
         *
         * @param \Illuminate\Process\PendingProcess $process
         * @param \Illuminate\Contracts\Process\ProcessResult $result
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function recordIfRecording($process, $result)
        {
            return \Illuminate\Process\Factory::recordIfRecording($process, $result);
        }
        
        /**
         * Record the given process.
         *
         * @param \Illuminate\Process\PendingProcess $process
         * @param \Illuminate\Contracts\Process\ProcessResult $result
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function record($process, $result)
        {
            return \Illuminate\Process\Factory::record($process, $result);
        }
        
        /**
         * Indicate that an exception should be thrown if any process is not faked.
         *
         * @param bool $prevent
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function preventStrayProcesses($prevent = true)
        {
            return \Illuminate\Process\Factory::preventStrayProcesses($prevent);
        }
        
        /**
         * Determine if stray processes are being prevented.
         *
         * @return bool 
         * @static 
         */ 
        public static function preventingStrayProcesses()
        {
            return \Illuminate\Process\Factory::preventingStrayProcesses();
        }
        
        /**
         * Assert that a process was recorded matching a given truth test.
         *
         * @param \Closure|string $callback
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function assertRan($callback)
        {
            return \Illuminate\Process\Factory::assertRan($callback);
        }
        
        /**
         * Assert that a process was recorded a given number of times matching a given truth test.
         *
         * @param \Closure|string $callback
         * @param int $times
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function assertRanTimes($callback, $times = 1)
        {
            return \Illuminate\Process\Factory::assertRanTimes($callback, $times);
        }
        
        /**
         * Assert that a process was not recorded matching a given truth test.
         *
         * @param \Closure|string $callback
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function assertNotRan($callback)
        {
            return \Illuminate\Process\Factory::assertNotRan($callback);
        }
        
        /**
         * Assert that a process was not recorded matching a given truth test.
         *
         * @param \Closure|string $callback
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function assertDidntRun($callback)
        {
            return \Illuminate\Process\Factory::assertDidntRun($callback);
        }
        
        /**
         * Assert that no processes were recorded.
         *
         * @return \Illuminate\Process\Factory 
         * @static 
         */ 
        public static function assertNothingRan()
        {
            return \Illuminate\Process\Factory::assertNothingRan();
        }
        
        /**
         * Start defining a pool of processes.
         *
         * @param callable $callback
         * @return \Illuminate\Process\Pool 
         * @static 
         */ 
        public static function pool($callback)
        {
            return \Illuminate\Process\Factory::pool($callback);
        }
        
        /**
         * Start defining a series of piped processes.
         *
         * @param callable|array $callback
         * @return \Illuminate\Contracts\Process\ProcessResult 
         * @static 
         */ 
        public static function pipe($callback, $output = null)
        {
            return \Illuminate\Process\Factory::pipe($callback, $output);
        }
        
        /**
         * Run a pool of processes and wait for them to finish executing.
         *
         * @param callable $callback
         * @param callable|null $output
         * @return \Illuminate\Process\ProcessPoolResults 
         * @static 
         */ 
        public static function concurrently($callback, $output = null)
        {
            return \Illuminate\Process\Factory::concurrently($callback, $output);
        }
        
        /**
         * Create a new pending process associated with this factory.
         *
         * @return \Illuminate\Process\PendingProcess 
         * @static 
         */ 
        public static function newPendingProcess()
        {
            return \Illuminate\Process\Factory::newPendingProcess();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Process\Factory::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Process\Factory::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Process\Factory::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Process\Factory::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Process\Factory::macroCall($method, $parameters);
        }
         
    }

    class Queue {
        
        /**
         * Register an event listener for the before job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
            \Illuminate\Queue\QueueManager::before($callback);
        }
        
        /**
         * Register an event listener for the after job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
            \Illuminate\Queue\QueueManager::after($callback);
        }
        
        /**
         * Register an event listener for the exception occurred job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function exceptionOccurred($callback)
        {
            \Illuminate\Queue\QueueManager::exceptionOccurred($callback);
        }
        
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function looping($callback)
        {
            \Illuminate\Queue\QueueManager::looping($callback);
        }
        
        /**
         * Register an event listener for the failed job event.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function failing($callback)
        {
            \Illuminate\Queue\QueueManager::failing($callback);
        }
        
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */ 
        public static function stopping($callback)
        {
            \Illuminate\Queue\QueueManager::stopping($callback);
        }
        
        /**
         * Determine if the driver is connected.
         *
         * @param string|null $name
         * @return bool 
         * @static 
         */ 
        public static function connected($name = null)
        {
            return \Illuminate\Queue\QueueManager::connected($name);
        }
        
        /**
         * Resolve a queue connection instance.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Queue\Queue 
         * @static 
         */ 
        public static function connection($name = null)
        {
            return \Illuminate\Queue\QueueManager::connection($name);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function extend($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::extend($driver, $resolver);
        }
        
        /**
         * Add a queue connection resolver.
         *
         * @param string $driver
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function addConnector($driver, $resolver)
        {
            \Illuminate\Queue\QueueManager::addConnector($driver, $resolver);
        }
        
        /**
         * Get the name of the default queue connection.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Queue\QueueManager::getDefaultDriver();
        }
        
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Queue\QueueManager::setDefaultDriver($name);
        }
        
        /**
         * Get the full name for the given connection.
         *
         * @param string|null $connection
         * @return string 
         * @static 
         */ 
        public static function getName($connection = null)
        {
            return \Illuminate\Queue\QueueManager::getName($connection);
        }
        
        /**
         * Get the application instance used by the manager.
         *
         * @return \Illuminate\Contracts\Foundation\Application 
         * @static 
         */ 
        public static function getApplication()
        {
            return \Illuminate\Queue\QueueManager::getApplication();
        }
        
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Queue\QueueManager 
         * @static 
         */ 
        public static function setApplication($app)
        {
            return \Illuminate\Queue\QueueManager::setApplication($app);
        }
        
        /**
         * Specify the jobs that should be queued instead of faked.
         *
         * @param array|string $jobsToBeQueued
         * @return \Illuminate\Support\Testing\Fakes\QueueFake 
         * @static 
         */ 
        public static function except($jobsToBeQueued)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::except($jobsToBeQueued);
        }
        
        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string|\Closure $job
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushed($job, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertPushed($job, $callback);
        }
        
        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string $queue
         * @param string|\Closure $job
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushedOn($queue, $job, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertPushedOn($queue, $job, $callback);
        }
        
        /**
         * Assert if a job was pushed with chained jobs based on a truth-test callback.
         *
         * @param string $job
         * @param array $expectedChain
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushedWithChain($job, $expectedChain = [], $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertPushedWithChain($job, $expectedChain, $callback);
        }
        
        /**
         * Assert if a job was pushed with an empty chain based on a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertPushedWithoutChain($job, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertPushedWithoutChain($job, $callback);
        }
        
        /**
         * Assert if a closure was pushed based on a truth-test callback.
         *
         * @param callable|int|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertClosurePushed($callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertClosurePushed($callback);
        }
        
        /**
         * Assert that a closure was not pushed based on a truth-test callback.
         *
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertClosureNotPushed($callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertClosureNotPushed($callback);
        }
        
        /**
         * Determine if a job was pushed based on a truth-test callback.
         *
         * @param string|\Closure $job
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function assertNotPushed($job, $callback = null)
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertNotPushed($job, $callback);
        }
        
        /**
         * Assert that no jobs were pushed.
         *
         * @return void 
         * @static 
         */ 
        public static function assertNothingPushed()
        {
            \Illuminate\Support\Testing\Fakes\QueueFake::assertNothingPushed();
        }
        
        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param string $job
         * @param callable|null $callback
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function pushed($job, $callback = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pushed($job, $callback);
        }
        
        /**
         * Determine if there are any stored jobs for a given class.
         *
         * @param string $job
         * @return bool 
         * @static 
         */ 
        public static function hasPushed($job)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::hasPushed($job);
        }
        
        /**
         * Get the size of the queue.
         *
         * @param string|null $queue
         * @return int 
         * @static 
         */ 
        public static function size($queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::size($queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string|object $job
         * @param mixed $data
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function push($job, $data = '', $queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::push($job, $data, $queue);
        }
        
        /**
         * Determine if a job should be faked or actually dispatched.
         *
         * @param object $job
         * @return bool 
         * @static 
         */ 
        public static function shouldFakeJob($job)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::shouldFakeJob($job);
        }
        
        /**
         * Push a raw payload onto the queue.
         *
         * @param string $payload
         * @param string|null $queue
         * @param array $options
         * @return mixed 
         * @static 
         */ 
        public static function pushRaw($payload, $queue = null, $options = [])
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pushRaw($payload, $queue, $options);
        }
        
        /**
         * Push a new job onto the queue after (n) seconds.
         *
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|object $job
         * @param mixed $data
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function later($delay, $job, $data = '', $queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::later($delay, $job, $data, $queue);
        }
        
        /**
         * Push a new job onto the queue.
         *
         * @param string $queue
         * @param string|object $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function pushOn($queue, $job, $data = '')
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pushOn($queue, $job, $data);
        }
        
        /**
         * Push a new job onto a specific queue after (n) seconds.
         *
         * @param string $queue
         * @param \DateTimeInterface|\DateInterval|int $delay
         * @param string|object $job
         * @param mixed $data
         * @return mixed 
         * @static 
         */ 
        public static function laterOn($queue, $delay, $job, $data = '')
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::laterOn($queue, $delay, $job, $data);
        }
        
        /**
         * Pop the next job off of the queue.
         *
         * @param string|null $queue
         * @return \Illuminate\Contracts\Queue\Job|null 
         * @static 
         */ 
        public static function pop($queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pop($queue);
        }
        
        /**
         * Push an array of jobs onto the queue.
         *
         * @param array $jobs
         * @param mixed $data
         * @param string|null $queue
         * @return mixed 
         * @static 
         */ 
        public static function bulk($jobs, $data = '', $queue = null)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::bulk($jobs, $data, $queue);
        }
        
        /**
         * Get the jobs that have been pushed.
         *
         * @return array 
         * @static 
         */ 
        public static function pushedJobs()
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::pushedJobs();
        }
        
        /**
         * Get the connection name for the queue.
         *
         * @return string 
         * @static 
         */ 
        public static function getConnectionName()
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::getConnectionName();
        }
        
        /**
         * Set the connection name for the queue.
         *
         * @param string $name
         * @return \Illuminate\Support\Testing\Fakes\QueueFake 
         * @static 
         */ 
        public static function setConnectionName($name)
        {
            return \Illuminate\Support\Testing\Fakes\QueueFake::setConnectionName($name);
        }
        
        /**
         * Get the backoff for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed 
         * @static 
         */ 
        public static function getJobBackoff($job)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getJobBackoff($job);
        }
        
        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @param mixed $job
         * @return mixed 
         * @static 
         */ 
        public static function getJobExpiration($job)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getJobExpiration($job);
        }
        
        /**
         * Register a callback to be executed when creating job payloads.
         *
         * @param callable|null $callback
         * @return void 
         * @static 
         */ 
        public static function createPayloadUsing($callback)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::createPayloadUsing($callback);
        }
        
        /**
         * Get the container instance being used by the connection.
         *
         * @return \Illuminate\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Queue\Queue            
            return \Illuminate\Queue\SyncQueue::getContainer();
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Queue\Queue            
            \Illuminate\Queue\SyncQueue::setContainer($container);
        }
         
    }

    class RateLimiter {
        
        /**
         * Register a named limiter configuration.
         *
         * @param string $name
         * @param \Closure $callback
         * @return \Illuminate\Cache\RateLimiter 
         * @static 
         */ 
        public static function for($name, $callback)
        {
            return \Illuminate\Cache\RateLimiter::for($name, $callback);
        }
        
        /**
         * Get the given named rate limiter.
         *
         * @param string $name
         * @return \Closure|null 
         * @static 
         */ 
        public static function limiter($name)
        {
            return \Illuminate\Cache\RateLimiter::limiter($name);
        }
        
        /**
         * Attempts to execute a callback if it's not limited.
         *
         * @param string $key
         * @param int $maxAttempts
         * @param \Closure $callback
         * @param int $decaySeconds
         * @return mixed 
         * @static 
         */ 
        public static function attempt($key, $maxAttempts, $callback, $decaySeconds = 60)
        {
            return \Illuminate\Cache\RateLimiter::attempt($key, $maxAttempts, $callback, $decaySeconds);
        }
        
        /**
         * Determine if the given key has been "accessed" too many times.
         *
         * @param string $key
         * @param int $maxAttempts
         * @return bool 
         * @static 
         */ 
        public static function tooManyAttempts($key, $maxAttempts)
        {
            return \Illuminate\Cache\RateLimiter::tooManyAttempts($key, $maxAttempts);
        }
        
        /**
         * Increment the counter for a given key for a given decay time.
         *
         * @param string $key
         * @param int $decaySeconds
         * @return int 
         * @static 
         */ 
        public static function hit($key, $decaySeconds = 60)
        {
            return \Illuminate\Cache\RateLimiter::hit($key, $decaySeconds);
        }
        
        /**
         * Get the number of attempts for the given key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function attempts($key)
        {
            return \Illuminate\Cache\RateLimiter::attempts($key);
        }
        
        /**
         * Reset the number of attempts for the given key.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function resetAttempts($key)
        {
            return \Illuminate\Cache\RateLimiter::resetAttempts($key);
        }
        
        /**
         * Get the number of retries left for the given key.
         *
         * @param string $key
         * @param int $maxAttempts
         * @return int 
         * @static 
         */ 
        public static function remaining($key, $maxAttempts)
        {
            return \Illuminate\Cache\RateLimiter::remaining($key, $maxAttempts);
        }
        
        /**
         * Get the number of retries left for the given key.
         *
         * @param string $key
         * @param int $maxAttempts
         * @return int 
         * @static 
         */ 
        public static function retriesLeft($key, $maxAttempts)
        {
            return \Illuminate\Cache\RateLimiter::retriesLeft($key, $maxAttempts);
        }
        
        /**
         * Clear the hits and lockout timer for the given key.
         *
         * @param string $key
         * @return void 
         * @static 
         */ 
        public static function clear($key)
        {
            \Illuminate\Cache\RateLimiter::clear($key);
        }
        
        /**
         * Get the number of seconds until the "key" is accessible again.
         *
         * @param string $key
         * @return int 
         * @static 
         */ 
        public static function availableIn($key)
        {
            return \Illuminate\Cache\RateLimiter::availableIn($key);
        }
        
        /**
         * Clean the rate limiter key from unicode characters.
         *
         * @param string $key
         * @return string 
         * @static 
         */ 
        public static function cleanRateLimiterKey($key)
        {
            return \Illuminate\Cache\RateLimiter::cleanRateLimiterKey($key);
        }
         
    }

    class Redirect {
        
        /**
         * Create a new redirect response to the previous location.
         *
         * @param int $status
         * @param array $headers
         * @param mixed $fallback
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function back($status = 302, $headers = [], $fallback = false)
        {
            return \Illuminate\Routing\Redirector::back($status, $headers, $fallback);
        }
        
        /**
         * Create a new redirect response to the current URI.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function refresh($status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::refresh($status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function guest($path, $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\Redirector::guest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param mixed $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function intended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\Redirector::intended($default, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function to($path, $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\Redirector::to($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function away($path, $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::away($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function secure($path, $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::secure($path, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function route($route, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::route($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a signed named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function signedRoute($route, $parameters = [], $expiration = null, $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::signedRoute($route, $parameters, $expiration, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a signed named route.
         *
         * @param string $route
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function temporarySignedRoute($route, $expiration, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::temporarySignedRoute($route, $expiration, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function action($action, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\Redirector::action($action, $parameters, $status, $headers);
        }
        
        /**
         * Get the URL generator instance.
         *
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function getUrlGenerator()
        {
            return \Illuminate\Routing\Redirector::getUrlGenerator();
        }
        
        /**
         * Set the active session store.
         *
         * @param \Illuminate\Session\Store $session
         * @return void 
         * @static 
         */ 
        public static function setSession($session)
        {
            \Illuminate\Routing\Redirector::setSession($session);
        }
        
        /**
         * Get the "intended" URL from the session.
         *
         * @return string|null 
         * @static 
         */ 
        public static function getIntendedUrl()
        {
            return \Illuminate\Routing\Redirector::getIntendedUrl();
        }
        
        /**
         * Set the "intended" URL in the session.
         *
         * @param string $url
         * @return \Illuminate\Routing\Redirector 
         * @static 
         */ 
        public static function setIntendedUrl($url)
        {
            return \Illuminate\Routing\Redirector::setIntendedUrl($url);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Redirector::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Routing\Redirector::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Redirector::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Routing\Redirector::flushMacros();
        }
         
    }

    class Request {
        
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static 
         * @static 
         */ 
        public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }
        
        /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function instance()
        {
            return \Illuminate\Http\Request::instance();
        }
        
        /**
         * Get the request method.
         *
         * @return string 
         * @static 
         */ 
        public static function method()
        {
            return \Illuminate\Http\Request::method();
        }
        
        /**
         * Get the root URL for the application.
         *
         * @return string 
         * @static 
         */ 
        public static function root()
        {
            return \Illuminate\Http\Request::root();
        }
        
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function url()
        {
            return \Illuminate\Http\Request::url();
        }
        
        /**
         * Get the full URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function fullUrl()
        {
            return \Illuminate\Http\Request::fullUrl();
        }
        
        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param array $query
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithQuery($query)
        {
            return \Illuminate\Http\Request::fullUrlWithQuery($query);
        }
        
        /**
         * Get the full URL for the request without the given query string parameters.
         *
         * @param array|string $keys
         * @return string 
         * @static 
         */ 
        public static function fullUrlWithoutQuery($keys)
        {
            return \Illuminate\Http\Request::fullUrlWithoutQuery($keys);
        }
        
        /**
         * Get the current path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function path()
        {
            return \Illuminate\Http\Request::path();
        }
        
        /**
         * Get the current decoded path info for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function decodedPath()
        {
            return \Illuminate\Http\Request::decodedPath();
        }
        
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param int $index
         * @param string|null $default
         * @return string|null 
         * @static 
         */ 
        public static function segment($index, $default = null)
        {
            return \Illuminate\Http\Request::segment($index, $default);
        }
        
        /**
         * Get all of the segments for the request path.
         *
         * @return array 
         * @static 
         */ 
        public static function segments()
        {
            return \Illuminate\Http\Request::segments();
        }
        
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is(...$patterns)
        {
            return \Illuminate\Http\Request::is(...$patterns);
        }
        
        /**
         * Determine if the route name matches a given pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function routeIs(...$patterns)
        {
            return \Illuminate\Http\Request::routeIs(...$patterns);
        }
        
        /**
         * Determine if the current request URL and query string match a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function fullUrlIs(...$patterns)
        {
            return \Illuminate\Http\Request::fullUrlIs(...$patterns);
        }
        
        /**
         * Get the host name.
         *
         * @return string 
         * @static 
         */ 
        public static function host()
        {
            return \Illuminate\Http\Request::host();
        }
        
        /**
         * Get the HTTP host being requested.
         *
         * @return string 
         * @static 
         */ 
        public static function httpHost()
        {
            return \Illuminate\Http\Request::httpHost();
        }
        
        /**
         * Get the scheme and HTTP host.
         *
         * @return string 
         * @static 
         */ 
        public static function schemeAndHttpHost()
        {
            return \Illuminate\Http\Request::schemeAndHttpHost();
        }
        
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function ajax()
        {
            return \Illuminate\Http\Request::ajax();
        }
        
        /**
         * Determine if the request is the result of a PJAX call.
         *
         * @return bool 
         * @static 
         */ 
        public static function pjax()
        {
            return \Illuminate\Http\Request::pjax();
        }
        
        /**
         * Determine if the request is the result of a prefetch call.
         *
         * @return bool 
         * @static 
         */ 
        public static function prefetch()
        {
            return \Illuminate\Http\Request::prefetch();
        }
        
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool 
         * @static 
         */ 
        public static function secure()
        {
            return \Illuminate\Http\Request::secure();
        }
        
        /**
         * Get the client IP address.
         *
         * @return string|null 
         * @static 
         */ 
        public static function ip()
        {
            return \Illuminate\Http\Request::ip();
        }
        
        /**
         * Get the client IP addresses.
         *
         * @return array 
         * @static 
         */ 
        public static function ips()
        {
            return \Illuminate\Http\Request::ips();
        }
        
        /**
         * Get the client user agent.
         *
         * @return string|null 
         * @static 
         */ 
        public static function userAgent()
        {
            return \Illuminate\Http\Request::userAgent();
        }
        
        /**
         * Merge new input into the current request's input array.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function merge($input)
        {
            return \Illuminate\Http\Request::merge($input);
        }
        
        /**
         * Merge new input into the request's input, but only when that key is missing from the request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function mergeIfMissing($input)
        {
            return \Illuminate\Http\Request::mergeIfMissing($input);
        }
        
        /**
         * Replace the input for the current request.
         *
         * @param array $input
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function replace($input)
        {
            return \Illuminate\Http\Request::replace($input);
        }
        
        /**
         * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
         * 
         * Instead, you may use the "input" method.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Http\Request::get($key, $default);
        }
        
        /**
         * Get the JSON payload for the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed 
         * @static 
         */ 
        public static function json($key = null, $default = null)
        {
            return \Illuminate\Http\Request::json($key, $default);
        }
        
        /**
         * Create a new request instance from the given Laravel request.
         *
         * @param \Illuminate\Http\Request $from
         * @param \Illuminate\Http\Request|null $to
         * @return static 
         * @static 
         */ 
        public static function createFrom($from, $to = null)
        {
            return \Illuminate\Http\Request::createFrom($from, $to);
        }
        
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return static 
         * @static 
         */ 
        public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }
        
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @return static 
         * @param array|null $query The GET parameters
         * @param array|null $request The POST parameters
         * @param array|null $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array|null $cookies The COOKIE parameters
         * @param array|null $files The FILES parameters
         * @param array|null $server The SERVER parameters
         * @static 
         */ 
        public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            return \Illuminate\Http\Request::duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        
        /**
         * Whether the request contains a Session object.
         * 
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @param bool $skipIfUninitialized When true, ignores factories injected by `setSessionFactory`
         * @static 
         */ 
        public static function hasSession($skipIfUninitialized = false)
        {
            return \Illuminate\Http\Request::hasSession($skipIfUninitialized);
        }
        
        /**
         * Gets the Session.
         *
         * @throws SessionNotFoundException When session is not set properly
         * @static 
         */ 
        public static function getSession()
        {
            return \Illuminate\Http\Request::getSession();
        }
        
        /**
         * Get the session associated with the request.
         *
         * @return \Illuminate\Contracts\Session\Session 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function session()
        {
            return \Illuminate\Http\Request::session();
        }
        
        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return void 
         * @static 
         */ 
        public static function setLaravelSession($session)
        {
            \Illuminate\Http\Request::setLaravelSession($session);
        }
        
        /**
         * Set the locale for the request instance.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setRequestLocale($locale)
        {
            \Illuminate\Http\Request::setRequestLocale($locale);
        }
        
        /**
         * Set the default locale for the request instance.
         *
         * @param string $locale
         * @return void 
         * @static 
         */ 
        public static function setDefaultRequestLocale($locale)
        {
            \Illuminate\Http\Request::setDefaultRequestLocale($locale);
        }
        
        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @return mixed 
         * @static 
         */ 
        public static function user($guard = null)
        {
            return \Illuminate\Http\Request::user($guard);
        }
        
        /**
         * Get the route handling the request.
         *
         * @param string|null $param
         * @param mixed $default
         * @return \Illuminate\Routing\Route|object|string|null 
         * @static 
         */ 
        public static function route($param = null, $default = null)
        {
            return \Illuminate\Http\Request::route($param, $default);
        }
        
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function fingerprint()
        {
            return \Illuminate\Http\Request::fingerprint();
        }
        
        /**
         * Set the JSON payload for the request.
         *
         * @param \Symfony\Component\HttpFoundation\ParameterBag $json
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setJson($json)
        {
            return \Illuminate\Http\Request::setJson($json);
        }
        
        /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getUserResolver()
        {
            return \Illuminate\Http\Request::getUserResolver();
        }
        
        /**
         * Set the user resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setUserResolver($callback)
        {
            return \Illuminate\Http\Request::setUserResolver($callback);
        }
        
        /**
         * Get the route resolver callback.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function getRouteResolver()
        {
            return \Illuminate\Http\Request::getRouteResolver();
        }
        
        /**
         * Set the route resolver callback.
         *
         * @param \Closure $callback
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function setRouteResolver($callback)
        {
            return \Illuminate\Http\Request::setRouteResolver($callback);
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @return array 
         * @static 
         */ 
        public static function toArray()
        {
            return \Illuminate\Http\Request::toArray();
        }
        
        /**
         * Determine if the given offset exists.
         *
         * @param string $offset
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($offset)
        {
            return \Illuminate\Http\Request::offsetExists($offset);
        }
        
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @return mixed 
         * @static 
         */ 
        public static function offsetGet($offset)
        {
            return \Illuminate\Http\Request::offsetGet($offset);
        }
        
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($offset, $value)
        {
            \Illuminate\Http\Request::offsetSet($offset, $value);
        }
        
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($offset)
        {
            \Illuminate\Http\Request::offsetUnset($offset);
        }
        
        /**
         * Sets the parameters for this request.
         * 
         * This method also re-initializes all properties.
         *
         * @param array $query The GET parameters
         * @param array $request The POST parameters
         * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array $cookies The COOKIE parameters
         * @param array $files The FILES parameters
         * @param array $server The SERVER parameters
         * @param string|resource|null $content The raw body data
         * @return void 
         * @static 
         */ 
        public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @static 
         */ 
        public static function createFromGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::createFromGlobals();
        }
        
        /**
         * Creates a Request based on a given URI and configuration.
         * 
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param string $uri The URI
         * @param string $method The HTTP method
         * @param array $parameters The query (GET) or request (POST) parameters
         * @param array $cookies The request cookies ($_COOKIE)
         * @param array $files The request files ($_FILES)
         * @param array $server The server parameters ($_SERVER)
         * @param string|resource|null $content The raw body data
         * @static 
         */ 
        public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        
        /**
         * Sets a callable able to create a Request instance.
         * 
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @return void 
         * @static 
         */ 
        public static function setFactory($callable)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setFactory($callable);
        }
        
        /**
         * Overrides the PHP global variables according to this request instance.
         * 
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @return void 
         * @static 
         */ 
        public static function overrideGlobals()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::overrideGlobals();
        }
        
        /**
         * Sets a list of trusted proxies.
         * 
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array $proxies A list of trusted proxies, the string 'REMOTE_ADDR' will be replaced with $_SERVER['REMOTE_ADDR']
         * @param int $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
         * @return void 
         * @static 
         */ 
        public static function setTrustedProxies($proxies, $trustedHeaderSet)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setTrustedProxies($proxies, $trustedHeaderSet);
        }
        
        /**
         * Gets the list of trusted proxies.
         *
         * @return string[] 
         * @static 
         */ 
        public static function getTrustedProxies()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        
        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static 
         */ 
        public static function getTrustedHeaderSet()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
        
        /**
         * Sets a list of trusted host patterns.
         * 
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @return void 
         * @static 
         */ 
        public static function setTrustedHosts($hostPatterns)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        
        /**
         * Gets the list of trusted host patterns.
         *
         * @return string[] 
         * @static 
         */ 
        public static function getTrustedHosts()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        
        /**
         * Normalizes a query string.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @static 
         */ 
        public static function normalizeQueryString($qs)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         * 
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         * 
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @return void 
         * @static 
         */ 
        public static function enableHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @static 
         */ 
        public static function getHttpMethodParameterOverride()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @static 
         */ 
        public static function hasPreviousSession()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::hasPreviousSession();
        }
        
        /**
         * 
         *
         * @return void 
         * @static 
         */ 
        public static function setSession($session)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setSession($session);
        }
        
        /**
         * 
         *
         * @internal 
         * @param \Symfony\Component\HttpFoundation\callable():  SessionInterface $factory
         * @static 
         */ 
        public static function setSessionFactory($factory)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::setSessionFactory($factory);
        }
        
        /**
         * Returns the client IP addresses.
         * 
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         * 
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @see getClientIp()
         * @static 
         */ 
        public static function getClientIps()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIps();
        }
        
        /**
         * Returns the client IP address.
         * 
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         * 
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static 
         */ 
        public static function getClientIp()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getClientIp();
        }
        
        /**
         * Returns current script name.
         *
         * @static 
         */ 
        public static function getScriptName()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScriptName();
        }
        
        /**
         * Returns the path being requested relative to the executed script.
         * 
         * The path info always starts with a /.
         * 
         * Suppose this request is instantiated from /mysite on localhost:
         * 
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getPathInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPathInfo();
        }
        
        /**
         * Returns the root path from which this request is executed.
         * 
         * Suppose that an index.php file instantiates this request object:
         * 
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBasePath()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBasePath();
        }
        
        /**
         * Returns the root URL from which this request is executed.
         * 
         * The base URL never ends with a /.
         * 
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static 
         */ 
        public static function getBaseUrl()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getBaseUrl();
        }
        
        /**
         * Gets the request's scheme.
         *
         * @static 
         */ 
        public static function getScheme()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getScheme();
        }
        
        /**
         * Returns the port on which the request is made.
         * 
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Port" header must contain the client port.
         *
         * @return int|string|null Can be a string if fetched from the server bag
         * @static 
         */ 
        public static function getPort()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPort();
        }
        
        /**
         * Returns the user.
         *
         * @static 
         */ 
        public static function getUser()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUser();
        }
        
        /**
         * Returns the password.
         *
         * @static 
         */ 
        public static function getPassword()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPassword();
        }
        
        /**
         * Gets the user info.
         *
         * @return string|null A user name if any and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static 
         */ 
        public static function getUserInfo()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUserInfo();
        }
        
        /**
         * Returns the HTTP host being requested.
         * 
         * The port name will be appended to the host if it's non-standard.
         *
         * @static 
         */ 
        public static function getHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHttpHost();
        }
        
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static 
         */ 
        public static function getRequestUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestUri();
        }
        
        /**
         * Gets the scheme and HTTP host.
         * 
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @static 
         */ 
        public static function getSchemeAndHttpHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getSchemeAndHttpHost();
        }
        
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @see getQueryString()
         * @static 
         */ 
        public static function getUri()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUri();
        }
        
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @static 
         */ 
        public static function getUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getUriForPath($path);
        }
        
        /**
         * Returns the path as relative reference from the current Request path.
         * 
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         * 
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @static 
         */ 
        public static function getRelativeUriForPath($path)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRelativeUriForPath($path);
        }
        
        /**
         * Generates the normalized query string for the Request.
         * 
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @static 
         */ 
        public static function getQueryString()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getQueryString();
        }
        
        /**
         * Checks whether the request is secure or not.
         * 
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         *
         * @static 
         */ 
        public static function isSecure()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isSecure();
        }
        
        /**
         * Returns the host name.
         * 
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         * 
         * The "X-Forwarded-Host" header must contain the client host name.
         *
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static 
         */ 
        public static function getHost()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getHost();
        }
        
        /**
         * Sets the request method.
         *
         * @return void 
         * @static 
         */ 
        public static function setMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setMethod($method);
        }
        
        /**
         * Gets the request "intended" method.
         * 
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         * 
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         * 
         * The method is always an uppercased string.
         *
         * @see getRealMethod()
         * @static 
         */ 
        public static function getMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMethod();
        }
        
        /**
         * Gets the "real" request method.
         *
         * @see getMethod()
         * @static 
         */ 
        public static function getRealMethod()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRealMethod();
        }
        
        /**
         * Gets the mime type associated with the format.
         *
         * @static 
         */ 
        public static function getMimeType($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeType($format);
        }
        
        /**
         * Gets the mime types associated with the format.
         *
         * @return string[] 
         * @static 
         */ 
        public static function getMimeTypes($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getMimeTypes($format);
        }
        
        /**
         * Gets the format associated with the mime type.
         *
         * @static 
         */ 
        public static function getFormat($mimeType)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getFormat($mimeType);
        }
        
        /**
         * Associates a format with mime types.
         *
         * @param string|string[] $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @return void 
         * @static 
         */ 
        public static function setFormat($format, $mimeTypes)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setFormat($format, $mimeTypes);
        }
        
        /**
         * Gets the request format.
         * 
         * Here is the process to determine the format:
         * 
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @see getPreferredFormat
         * @static 
         */ 
        public static function getRequestFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getRequestFormat($default);
        }
        
        /**
         * Sets the request format.
         *
         * @return void 
         * @static 
         */ 
        public static function setRequestFormat($format)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setRequestFormat($format);
        }
        
        /**
         * Gets the usual name of the format associated with the request's media type (provided in the Content-Type header).
         *
         * @deprecated since Symfony 6.2, use getContentTypeFormat() instead
         * @static 
         */ 
        public static function getContentType()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentType();
        }
        
        /**
         * Gets the usual name of the format associated with the request's media type (provided in the Content-Type header).
         *
         * @see Request::$formats
         * @static 
         */ 
        public static function getContentTypeFormat()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContentTypeFormat();
        }
        
        /**
         * Sets the default locale.
         *
         * @return void 
         * @static 
         */ 
        public static function setDefaultLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setDefaultLocale($locale);
        }
        
        /**
         * Get the default locale.
         *
         * @static 
         */ 
        public static function getDefaultLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getDefaultLocale();
        }
        
        /**
         * Sets the locale.
         *
         * @return void 
         * @static 
         */ 
        public static function setLocale($locale)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            \Illuminate\Http\Request::setLocale($locale);
        }
        
        /**
         * Get the locale.
         *
         * @static 
         */ 
        public static function getLocale()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLocale();
        }
        
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @static 
         */ 
        public static function isMethod($method)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethod($method);
        }
        
        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @static 
         */ 
        public static function isMethodSafe()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodSafe();
        }
        
        /**
         * Checks whether or not the method is idempotent.
         *
         * @static 
         */ 
        public static function isMethodIdempotent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodIdempotent();
        }
        
        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @static 
         */ 
        public static function isMethodCacheable()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isMethodCacheable();
        }
        
        /**
         * Returns the protocol version.
         * 
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @static 
         */ 
        public static function getProtocolVersion()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getProtocolVersion();
        }
        
        /**
         * Returns the request body content.
         *
         * @param bool $asResource If true, a resource will be returned
         * @return string|resource 
         * @psalm-return ($asResource is true ? resource : string)
         * @static 
         */ 
        public static function getContent($asResource = false)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getContent($asResource);
        }
        
        /**
         * Gets the decoded form or json request body.
         *
         * @throws JsonException When the body cannot be decoded to an array
         * @static 
         */ 
        public static function getPayload()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPayload();
        }
        
        /**
         * Gets the Etags.
         *
         * @static 
         */ 
        public static function getETags()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getETags();
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function isNoCache()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isNoCache();
        }
        
        /**
         * Gets the preferred format for the response by inspecting, in the following order:
         *   * the request format set using setRequestFormat;
         *   * the values of the Accept HTTP header.
         * 
         * Note that if you use this method, you should send the "Vary: Accept" header
         * in the response to prevent any issues with intermediary HTTP caches.
         *
         * @static 
         */ 
        public static function getPreferredFormat($default = 'html')
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredFormat($default);
        }
        
        /**
         * Returns the preferred language.
         *
         * @param string[] $locales An array of ordered available locales
         * @static 
         */ 
        public static function getPreferredLanguage($locales = null)
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getPreferredLanguage($locales);
        }
        
        /**
         * Gets a list of languages acceptable by the client browser ordered in the user browser preferences.
         *
         * @return string[] 
         * @static 
         */ 
        public static function getLanguages()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getLanguages();
        }
        
        /**
         * Gets a list of charsets acceptable by the client browser in preferable order.
         *
         * @return string[] 
         * @static 
         */ 
        public static function getCharsets()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getCharsets();
        }
        
        /**
         * Gets a list of encodings acceptable by the client browser in preferable order.
         *
         * @return string[] 
         * @static 
         */ 
        public static function getEncodings()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getEncodings();
        }
        
        /**
         * Gets a list of content types acceptable by the client browser in preferable order.
         *
         * @return string[] 
         * @static 
         */ 
        public static function getAcceptableContentTypes()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::getAcceptableContentTypes();
        }
        
        /**
         * Returns true if the request is an XMLHttpRequest.
         * 
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @static 
         */ 
        public static function isXmlHttpRequest()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isXmlHttpRequest();
        }
        
        /**
         * Checks whether the client browser prefers safe content or not according to RFC8674.
         *
         * @see https://tools.ietf.org/html/rfc8674
         * @static 
         */ 
        public static function preferSafeContent()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::preferSafeContent();
        }
        
        /**
         * Indicates whether this request originated from a trusted proxy.
         * 
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @static 
         */ 
        public static function isFromTrustedProxy()
        {
            //Method inherited from \Symfony\Component\HttpFoundation\Request            
            return \Illuminate\Http\Request::isFromTrustedProxy();
        }
        
        /**
         * Filter the given array of rules into an array of rules that are included in precognitive headers.
         *
         * @param array $rules
         * @return array 
         * @static 
         */ 
        public static function filterPrecognitiveRules($rules)
        {
            return \Illuminate\Http\Request::filterPrecognitiveRules($rules);
        }
        
        /**
         * Determine if the request is attempting to be precognitive.
         *
         * @return bool 
         * @static 
         */ 
        public static function isAttemptingPrecognition()
        {
            return \Illuminate\Http\Request::isAttemptingPrecognition();
        }
        
        /**
         * Determine if the request is precognitive.
         *
         * @return bool 
         * @static 
         */ 
        public static function isPrecognitive()
        {
            return \Illuminate\Http\Request::isPrecognitive();
        }
        
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function isJson()
        {
            return \Illuminate\Http\Request::isJson();
        }
        
        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool 
         * @static 
         */ 
        public static function expectsJson()
        {
            return \Illuminate\Http\Request::expectsJson();
        }
        
        /**
         * Determine if the current request is asking for JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function wantsJson()
        {
            return \Illuminate\Http\Request::wantsJson();
        }
        
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param string|array $contentTypes
         * @return bool 
         * @static 
         */ 
        public static function accepts($contentTypes)
        {
            return \Illuminate\Http\Request::accepts($contentTypes);
        }
        
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param string|array $contentTypes
         * @return string|null 
         * @static 
         */ 
        public static function prefers($contentTypes)
        {
            return \Illuminate\Http\Request::prefers($contentTypes);
        }
        
        /**
         * Determine if the current request accepts any content type.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsAnyContentType()
        {
            return \Illuminate\Http\Request::acceptsAnyContentType();
        }
        
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsJson()
        {
            return \Illuminate\Http\Request::acceptsJson();
        }
        
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool 
         * @static 
         */ 
        public static function acceptsHtml()
        {
            return \Illuminate\Http\Request::acceptsHtml();
        }
        
        /**
         * Determine if the given content types match.
         *
         * @param string $actual
         * @param string $type
         * @return bool 
         * @static 
         */ 
        public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        
        /**
         * Get the data format expected in the response.
         *
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function format($default = 'html')
        {
            return \Illuminate\Http\Request::format($default);
        }
        
        /**
         * Retrieve an old input item.
         *
         * @param string|null $key
         * @param \Illuminate\Database\Eloquent\Model|string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function old($key = null, $default = null)
        {
            return \Illuminate\Http\Request::old($key, $default);
        }
        
        /**
         * Flash the input for the current request to the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flash()
        {
            \Illuminate\Http\Request::flash();
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashOnly($keys)
        {
            \Illuminate\Http\Request::flashOnly($keys);
        }
        
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function flashExcept($keys)
        {
            \Illuminate\Http\Request::flashExcept($keys);
        }
        
        /**
         * Flush all of the old input from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Http\Request::flush();
        }
        
        /**
         * Retrieve a server variable from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function server($key = null, $default = null)
        {
            return \Illuminate\Http\Request::server($key, $default);
        }
        
        /**
         * Determine if a header is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasHeader($key)
        {
            return \Illuminate\Http\Request::hasHeader($key);
        }
        
        /**
         * Retrieve a header from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function header($key = null, $default = null)
        {
            return \Illuminate\Http\Request::header($key, $default);
        }
        
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null 
         * @static 
         */ 
        public static function bearerToken()
        {
            return \Illuminate\Http\Request::bearerToken();
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
            return \Illuminate\Http\Request::exists($key);
        }
        
        /**
         * Determine if the request contains a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Http\Request::has($key);
        }
        
        /**
         * Determine if the request contains any of the given inputs.
         *
         * @param string|array $keys
         * @return bool 
         * @static 
         */ 
        public static function hasAny($keys)
        {
            return \Illuminate\Http\Request::hasAny($keys);
        }
        
        /**
         * Apply the callback if the request contains the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed 
         * @static 
         */ 
        public static function whenHas($key, $callback, $default = null)
        {
            return \Illuminate\Http\Request::whenHas($key, $callback, $default);
        }
        
        /**
         * Determine if the request contains a non-empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function filled($key)
        {
            return \Illuminate\Http\Request::filled($key);
        }
        
        /**
         * Determine if the request contains an empty value for an input item.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function isNotFilled($key)
        {
            return \Illuminate\Http\Request::isNotFilled($key);
        }
        
        /**
         * Determine if the request contains a non-empty value for any of the given inputs.
         *
         * @param string|array $keys
         * @return bool 
         * @static 
         */ 
        public static function anyFilled($keys)
        {
            return \Illuminate\Http\Request::anyFilled($keys);
        }
        
        /**
         * Apply the callback if the request contains a non-empty value for the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed 
         * @static 
         */ 
        public static function whenFilled($key, $callback, $default = null)
        {
            return \Illuminate\Http\Request::whenFilled($key, $callback, $default);
        }
        
        /**
         * Determine if the request is missing a given input item key.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function missing($key)
        {
            return \Illuminate\Http\Request::missing($key);
        }
        
        /**
         * Apply the callback if the request is missing the given input item key.
         *
         * @param string $key
         * @param callable $callback
         * @param callable|null $default
         * @return $this|mixed 
         * @static 
         */ 
        public static function whenMissing($key, $callback, $default = null)
        {
            return \Illuminate\Http\Request::whenMissing($key, $callback, $default);
        }
        
        /**
         * Get the keys for all of the input and files.
         *
         * @return array 
         * @static 
         */ 
        public static function keys()
        {
            return \Illuminate\Http\Request::keys();
        }
        
        /**
         * Get all of the input and files for the request.
         *
         * @param array|mixed|null $keys
         * @return array 
         * @static 
         */ 
        public static function all($keys = null)
        {
            return \Illuminate\Http\Request::all($keys);
        }
        
        /**
         * Retrieve an input item from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function input($key = null, $default = null)
        {
            return \Illuminate\Http\Request::input($key, $default);
        }
        
        /**
         * Retrieve input from the request as a Stringable instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Support\Stringable 
         * @static 
         */ 
        public static function str($key, $default = null)
        {
            return \Illuminate\Http\Request::str($key, $default);
        }
        
        /**
         * Retrieve input from the request as a Stringable instance.
         *
         * @param string $key
         * @param mixed $default
         * @return \Illuminate\Support\Stringable 
         * @static 
         */ 
        public static function string($key, $default = null)
        {
            return \Illuminate\Http\Request::string($key, $default);
        }
        
        /**
         * Retrieve input as a boolean value.
         * 
         * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
         *
         * @param string|null $key
         * @param bool $default
         * @return bool 
         * @static 
         */ 
        public static function boolean($key = null, $default = false)
        {
            return \Illuminate\Http\Request::boolean($key, $default);
        }
        
        /**
         * Retrieve input as an integer value.
         *
         * @param string $key
         * @param int $default
         * @return int 
         * @static 
         */ 
        public static function integer($key, $default = 0)
        {
            return \Illuminate\Http\Request::integer($key, $default);
        }
        
        /**
         * Retrieve input as a float value.
         *
         * @param string $key
         * @param float $default
         * @return float 
         * @static 
         */ 
        public static function float($key, $default = 0.0)
        {
            return \Illuminate\Http\Request::float($key, $default);
        }
        
        /**
         * Retrieve input from the request as a Carbon instance.
         *
         * @param string $key
         * @param string|null $format
         * @param string|null $tz
         * @return \Illuminate\Support\Carbon|null 
         * @throws \Carbon\Exceptions\InvalidFormatException
         * @static 
         */ 
        public static function date($key, $format = null, $tz = null)
        {
            return \Illuminate\Http\Request::date($key, $format, $tz);
        }
        
        /**
         * Retrieve input from the request as an enum.
         *
         * @template TEnum
         * @param string $key
         * @param \Illuminate\Http\class-string<TEnum> $enumClass
         * @return \Illuminate\Http\TEnum|null 
         * @static 
         */ 
        public static function enum($key, $enumClass)
        {
            return \Illuminate\Http\Request::enum($key, $enumClass);
        }
        
        /**
         * Retrieve input from the request as a collection.
         *
         * @param array|string|null $key
         * @return \Illuminate\Support\Collection 
         * @static 
         */ 
        public static function collect($key = null)
        {
            return \Illuminate\Http\Request::collect($key);
        }
        
        /**
         * Get a subset containing the provided keys with values from the input data.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
            return \Illuminate\Http\Request::only($keys);
        }
        
        /**
         * Get all of the input except for a specified array of items.
         *
         * @param array|mixed $keys
         * @return array 
         * @static 
         */ 
        public static function except($keys)
        {
            return \Illuminate\Http\Request::except($keys);
        }
        
        /**
         * Retrieve a query string item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function query($key = null, $default = null)
        {
            return \Illuminate\Http\Request::query($key, $default);
        }
        
        /**
         * Retrieve a request payload item from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function post($key = null, $default = null)
        {
            return \Illuminate\Http\Request::post($key, $default);
        }
        
        /**
         * Determine if a cookie is set on the request.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasCookie($key)
        {
            return \Illuminate\Http\Request::hasCookie($key);
        }
        
        /**
         * Retrieve a cookie from the request.
         *
         * @param string|null $key
         * @param string|array|null $default
         * @return string|array|null 
         * @static 
         */ 
        public static function cookie($key = null, $default = null)
        {
            return \Illuminate\Http\Request::cookie($key, $default);
        }
        
        /**
         * Get an array of all of the files on the request.
         *
         * @return array 
         * @static 
         */ 
        public static function allFiles()
        {
            return \Illuminate\Http\Request::allFiles();
        }
        
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param string $key
         * @return bool 
         * @static 
         */ 
        public static function hasFile($key)
        {
            return \Illuminate\Http\Request::hasFile($key);
        }
        
        /**
         * Retrieve a file from the request.
         *
         * @param string|null $key
         * @param mixed $default
         * @return \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|array|null 
         * @static 
         */ 
        public static function file($key = null, $default = null)
        {
            return \Illuminate\Http\Request::file($key, $default);
        }
        
        /**
         * Dump the request items and end the script.
         *
         * @param mixed $keys
         * @return \Illuminate\Http\never 
         * @static 
         */ 
        public static function dd(...$keys)
        {
            return \Illuminate\Http\Request::dd(...$keys);
        }
        
        /**
         * Dump the items.
         *
         * @param mixed $keys
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function dump($keys = [])
        {
            return \Illuminate\Http\Request::dump($keys);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Http\Request::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Http\Request::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Http\Request::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Http\Request::flushMacros();
        }
        
        /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validate($rules, ...$params)
        {
            return \Illuminate\Http\Request::validate($rules, ...$params);
        }
        
        /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static 
         */ 
        public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
        
        /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignature($absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
        
        /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static 
         */ 
        public static function hasValidRelativeSignature()
        {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
        
        /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static 
         */ 
        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
         
    }

    class Response {
        
        /**
         * Create a new response instance.
         *
         * @param mixed $content
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function make($content = '', $status = 200, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::make($content, $status, $headers);
        }
        
        /**
         * Create a new "no content" response.
         *
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function noContent($status = 204, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::noContent($status, $headers);
        }
        
        /**
         * Create a new response for a given view.
         *
         * @param string|array $view
         * @param array $data
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\Response 
         * @static 
         */ 
        public static function view($view, $data = [], $status = 200, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::view($view, $data, $status, $headers);
        }
        
        /**
         * Create a new JSON response instance.
         *
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function json($data = [], $status = 200, $headers = [], $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::json($data, $status, $headers, $options);
        }
        
        /**
         * Create a new JSONP response instance.
         *
         * @param string $callback
         * @param mixed $data
         * @param int $status
         * @param array $headers
         * @param int $options
         * @return \Illuminate\Http\JsonResponse 
         * @static 
         */ 
        public static function jsonp($callback, $data = [], $status = 200, $headers = [], $options = 0)
        {
            return \Illuminate\Routing\ResponseFactory::jsonp($callback, $data, $status, $headers, $options);
        }
        
        /**
         * Create a new streamed response instance.
         *
         * @param callable $callback
         * @param int $status
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function stream($callback, $status = 200, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::stream($callback, $status, $headers);
        }
        
        /**
         * Create a new streamed response instance as a file download.
         *
         * @param callable $callback
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function streamDownload($callback, $name = null, $headers = [], $disposition = 'attachment')
        {
            return \Illuminate\Routing\ResponseFactory::streamDownload($callback, $name, $headers, $disposition);
        }
        
        /**
         * Create a new file download response.
         *
         * @param \SplFileInfo|string $file
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function download($file, $name = null, $headers = [], $disposition = 'attachment')
        {
            return \Illuminate\Routing\ResponseFactory::download($file, $name, $headers, $disposition);
        }
        
        /**
         * Return the raw contents of a binary file.
         *
         * @param \SplFileInfo|string $file
         * @param array $headers
         * @return \Symfony\Component\HttpFoundation\BinaryFileResponse 
         * @static 
         */ 
        public static function file($file, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::file($file, $headers);
        }
        
        /**
         * Create a new redirect response to the given path.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectTo($path, $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectTo($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to a named route.
         *
         * @param string $route
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::redirectToRoute($route, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response to a controller action.
         *
         * @param string $action
         * @param mixed $parameters
         * @param int $status
         * @param array $headers
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToAction($action, $parameters = [], $status = 302, $headers = [])
        {
            return \Illuminate\Routing\ResponseFactory::redirectToAction($action, $parameters, $status, $headers);
        }
        
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param string $path
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectGuest($path, $status, $headers, $secure);
        }
        
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param string $default
         * @param int $status
         * @param array $headers
         * @param bool|null $secure
         * @return \Illuminate\Http\RedirectResponse 
         * @static 
         */ 
        public static function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            return \Illuminate\Routing\ResponseFactory::redirectToIntended($default, $status, $headers, $secure);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\ResponseFactory::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Routing\ResponseFactory::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\ResponseFactory::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Routing\ResponseFactory::flushMacros();
        }
         
    }

    class Route {
        
        /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function get($uri, $action = null)
        {
            return \Illuminate\Routing\Router::get($uri, $action);
        }
        
        /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function post($uri, $action = null)
        {
            return \Illuminate\Routing\Router::post($uri, $action);
        }
        
        /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function put($uri, $action = null)
        {
            return \Illuminate\Routing\Router::put($uri, $action);
        }
        
        /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function patch($uri, $action = null)
        {
            return \Illuminate\Routing\Router::patch($uri, $action);
        }
        
        /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function delete($uri, $action = null)
        {
            return \Illuminate\Routing\Router::delete($uri, $action);
        }
        
        /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function options($uri, $action = null)
        {
            return \Illuminate\Routing\Router::options($uri, $action);
        }
        
        /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function any($uri, $action = null)
        {
            return \Illuminate\Routing\Router::any($uri, $action);
        }
        
        /**
         * Register a new fallback route with the router.
         *
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function fallback($action)
        {
            return \Illuminate\Routing\Router::fallback($action);
        }
        
        /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function redirect($uri, $destination, $status = 302)
        {
            return \Illuminate\Routing\Router::redirect($uri, $destination, $status);
        }
        
        /**
         * Create a permanent redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function permanentRedirect($uri, $destination)
        {
            return \Illuminate\Routing\Router::permanentRedirect($uri, $destination);
        }
        
        /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @param int|array $status
         * @param array $headers
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function view($uri, $view, $data = [], $status = 200, $headers = [])
        {
            return \Illuminate\Routing\Router::view($uri, $view, $data, $status, $headers);
        }
        
        /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function match($methods, $uri, $action = null)
        {
            return \Illuminate\Routing\Router::match($methods, $uri, $action);
        }
        
        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void 
         * @static 
         */ 
        public static function resources($resources, $options = [])
        {
            \Illuminate\Routing\Router::resources($resources, $options);
        }
        
        /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function resource($name, $controller, $options = [])
        {
            return \Illuminate\Routing\Router::resource($name, $controller, $options);
        }
        
        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void 
         * @static 
         */ 
        public static function apiResources($resources, $options = [])
        {
            \Illuminate\Routing\Router::apiResources($resources, $options);
        }
        
        /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */ 
        public static function apiResource($name, $controller, $options = [])
        {
            return \Illuminate\Routing\Router::apiResource($name, $controller, $options);
        }
        
        /**
         * Register an array of singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         * @return void 
         * @static 
         */ 
        public static function singletons($singletons, $options = [])
        {
            \Illuminate\Routing\Router::singletons($singletons, $options);
        }
        
        /**
         * Route a singleton resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingSingletonResourceRegistration 
         * @static 
         */ 
        public static function singleton($name, $controller, $options = [])
        {
            return \Illuminate\Routing\Router::singleton($name, $controller, $options);
        }
        
        /**
         * Register an array of API singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         * @return void 
         * @static 
         */ 
        public static function apiSingletons($singletons, $options = [])
        {
            \Illuminate\Routing\Router::apiSingletons($singletons, $options);
        }
        
        /**
         * Route an API singleton resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingSingletonResourceRegistration 
         * @static 
         */ 
        public static function apiSingleton($name, $controller, $options = [])
        {
            return \Illuminate\Routing\Router::apiSingleton($name, $controller, $options);
        }
        
        /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|array|string $routes
         * @return \Illuminate\Routing\Router 
         * @static 
         */ 
        public static function group($attributes, $routes)
        {
            return \Illuminate\Routing\Router::group($attributes, $routes);
        }
        
        /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @param bool $prependExistingPrefix
         * @return array 
         * @static 
         */ 
        public static function mergeWithLastGroup($new, $prependExistingPrefix = true)
        {
            return \Illuminate\Routing\Router::mergeWithLastGroup($new, $prependExistingPrefix);
        }
        
        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string 
         * @static 
         */ 
        public static function getLastGroupPrefix()
        {
            return \Illuminate\Routing\Router::getLastGroupPrefix();
        }
        
        /**
         * Add a route to the underlying route collection.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function addRoute($methods, $uri, $action)
        {
            return \Illuminate\Routing\Router::addRoute($methods, $uri, $action);
        }
        
        /**
         * Create a new Route object.
         *
         * @param array|string $methods
         * @param string $uri
         * @param mixed $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */ 
        public static function newRoute($methods, $uri, $action)
        {
            return \Illuminate\Routing\Router::newRoute($methods, $uri, $action);
        }
        
        /**
         * Return the response returned by the given route.
         *
         * @param string $name
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */ 
        public static function respondWithRoute($name)
        {
            return \Illuminate\Routing\Router::respondWithRoute($name);
        }
        
        /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */ 
        public static function dispatch($request)
        {
            return \Illuminate\Routing\Router::dispatch($request);
        }
        
        /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */ 
        public static function dispatchToRoute($request)
        {
            return \Illuminate\Routing\Router::dispatchToRoute($request);
        }
        
        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array 
         * @static 
         */ 
        public static function gatherRouteMiddleware($route)
        {
            return \Illuminate\Routing\Router::gatherRouteMiddleware($route);
        }
        
        /**
         * Resolve a flat array of middleware classes from the provided array.
         *
         * @param array $middleware
         * @param array $excluded
         * @return array 
         * @static 
         */ 
        public static function resolveMiddleware($middleware, $excluded = [])
        {
            return \Illuminate\Routing\Router::resolveMiddleware($middleware, $excluded);
        }
        
        /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */ 
        public static function prepareResponse($request, $response)
        {
            return \Illuminate\Routing\Router::prepareResponse($request, $response);
        }
        
        /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */ 
        public static function toResponse($request, $response)
        {
            return \Illuminate\Routing\Router::toResponse($request, $response);
        }
        
        /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return \Illuminate\Routing\Route 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException
         * @static 
         */ 
        public static function substituteBindings($route)
        {
            return \Illuminate\Routing\Router::substituteBindings($route);
        }
        
        /**
         * Substitute the implicit route bindings for the given route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return void 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException
         * @static 
         */ 
        public static function substituteImplicitBindings($route)
        {
            \Illuminate\Routing\Router::substituteImplicitBindings($route);
        }
        
        /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */ 
        public static function matched($callback)
        {
            \Illuminate\Routing\Router::matched($callback);
        }
        
        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array 
         * @static 
         */ 
        public static function getMiddleware()
        {
            return \Illuminate\Routing\Router::getMiddleware();
        }
        
        /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return \Illuminate\Routing\Router 
         * @static 
         */ 
        public static function aliasMiddleware($name, $class)
        {
            return \Illuminate\Routing\Router::aliasMiddleware($name, $class);
        }
        
        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMiddlewareGroup($name)
        {
            return \Illuminate\Routing\Router::hasMiddlewareGroup($name);
        }
        
        /**
         * Get all of the defined middleware groups.
         *
         * @return array 
         * @static 
         */ 
        public static function getMiddlewareGroups()
        {
            return \Illuminate\Routing\Router::getMiddlewareGroups();
        }
        
        /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return \Illuminate\Routing\Router 
         * @static 
         */ 
        public static function middlewareGroup($name, $middleware)
        {
            return \Illuminate\Routing\Router::middlewareGroup($name, $middleware);
        }
        
        /**
         * Add a middleware to the beginning of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router 
         * @static 
         */ 
        public static function prependMiddlewareToGroup($group, $middleware)
        {
            return \Illuminate\Routing\Router::prependMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * Add a middleware to the end of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router 
         * @static 
         */ 
        public static function pushMiddlewareToGroup($group, $middleware)
        {
            return \Illuminate\Routing\Router::pushMiddlewareToGroup($group, $middleware);
        }
        
        /**
         * Remove the given middleware from the specified group.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router 
         * @static 
         */ 
        public static function removeMiddlewareFromGroup($group, $middleware)
        {
            return \Illuminate\Routing\Router::removeMiddlewareFromGroup($group, $middleware);
        }
        
        /**
         * Flush the router's middleware groups.
         *
         * @return \Illuminate\Routing\Router 
         * @static 
         */ 
        public static function flushMiddlewareGroups()
        {
            return \Illuminate\Routing\Router::flushMiddlewareGroups();
        }
        
        /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void 
         * @static 
         */ 
        public static function bind($key, $binder)
        {
            \Illuminate\Routing\Router::bind($key, $binder);
        }
        
        /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */ 
        public static function model($key, $class, $callback = null)
        {
            \Illuminate\Routing\Router::model($key, $class, $callback);
        }
        
        /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         * @return \Closure|null 
         * @static 
         */ 
        public static function getBindingCallback($key)
        {
            return \Illuminate\Routing\Router::getBindingCallback($key);
        }
        
        /**
         * Get the global "where" patterns.
         *
         * @return array 
         * @static 
         */ 
        public static function getPatterns()
        {
            return \Illuminate\Routing\Router::getPatterns();
        }
        
        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void 
         * @static 
         */ 
        public static function pattern($key, $pattern)
        {
            \Illuminate\Routing\Router::pattern($key, $pattern);
        }
        
        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void 
         * @static 
         */ 
        public static function patterns($patterns)
        {
            \Illuminate\Routing\Router::patterns($patterns);
        }
        
        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool 
         * @static 
         */ 
        public static function hasGroupStack()
        {
            return \Illuminate\Routing\Router::hasGroupStack();
        }
        
        /**
         * Get the current group stack for the router.
         *
         * @return array 
         * @static 
         */ 
        public static function getGroupStack()
        {
            return \Illuminate\Routing\Router::getGroupStack();
        }
        
        /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string|null $default
         * @return mixed 
         * @static 
         */ 
        public static function input($key, $default = null)
        {
            return \Illuminate\Routing\Router::input($key, $default);
        }
        
        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getCurrentRequest()
        {
            return \Illuminate\Routing\Router::getCurrentRequest();
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null 
         * @static 
         */ 
        public static function getCurrentRoute()
        {
            return \Illuminate\Routing\Router::getCurrentRoute();
        }
        
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null 
         * @static 
         */ 
        public static function current()
        {
            return \Illuminate\Routing\Router::current();
        }
        
        /**
         * Check if a route with the given name exists.
         *
         * @param string|array $name
         * @return bool 
         * @static 
         */ 
        public static function has($name)
        {
            return \Illuminate\Routing\Router::has($name);
        }
        
        /**
         * Get the current route name.
         *
         * @return string|null 
         * @static 
         */ 
        public static function currentRouteName()
        {
            return \Illuminate\Routing\Router::currentRouteName();
        }
        
        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function is(...$patterns)
        {
            return \Illuminate\Routing\Router::is(...$patterns);
        }
        
        /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */ 
        public static function currentRouteNamed(...$patterns)
        {
            return \Illuminate\Routing\Router::currentRouteNamed(...$patterns);
        }
        
        /**
         * Get the current route action.
         *
         * @return string|null 
         * @static 
         */ 
        public static function currentRouteAction()
        {
            return \Illuminate\Routing\Router::currentRouteAction();
        }
        
        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
         * @return bool 
         * @static 
         */ 
        public static function uses(...$patterns)
        {
            return \Illuminate\Routing\Router::uses(...$patterns);
        }
        
        /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool 
         * @static 
         */ 
        public static function currentRouteUses($action)
        {
            return \Illuminate\Routing\Router::currentRouteUses($action);
        }
        
        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @return void 
         * @static 
         */ 
        public static function singularResourceParameters($singular = true)
        {
            \Illuminate\Routing\Router::singularResourceParameters($singular);
        }
        
        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */ 
        public static function resourceParameters($parameters = [])
        {
            \Illuminate\Routing\Router::resourceParameters($parameters);
        }
        
        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         * @return array|null 
         * @static 
         */ 
        public static function resourceVerbs($verbs = [])
        {
            return \Illuminate\Routing\Router::resourceVerbs($verbs);
        }
        
        /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollectionInterface 
         * @static 
         */ 
        public static function getRoutes()
        {
            return \Illuminate\Routing\Router::getRoutes();
        }
        
        /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void 
         * @static 
         */ 
        public static function setRoutes($routes)
        {
            \Illuminate\Routing\Router::setRoutes($routes);
        }
        
        /**
         * Set the compiled route collection instance.
         *
         * @param array $routes
         * @return void 
         * @static 
         */ 
        public static function setCompiledRoutes($routes)
        {
            \Illuminate\Routing\Router::setCompiledRoutes($routes);
        }
        
        /**
         * Remove any duplicate middleware from the given array.
         *
         * @param array $middleware
         * @return array 
         * @static 
         */ 
        public static function uniqueMiddleware($middleware)
        {
            return \Illuminate\Routing\Router::uniqueMiddleware($middleware);
        }
        
        /**
         * Set the container instance used by the router.
         *
         * @param \Illuminate\Container\Container $container
         * @return \Illuminate\Routing\Router 
         * @static 
         */ 
        public static function setContainer($container)
        {
            return \Illuminate\Routing\Router::setContainer($container);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\Router::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Routing\Router::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\Router::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Routing\Router::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Routing\Router::macroCall($method, $parameters);
        }
        
        /**
         * 
         *
         * @see \Laravel\Ui\AuthRouteMethods::auth()
         * @param mixed $options
         * @static 
         */ 
        public static function auth($options = [])
        {
            return \Illuminate\Routing\Router::auth($options);
        }
        
        /**
         * 
         *
         * @see \Laravel\Ui\AuthRouteMethods::resetPassword()
         * @static 
         */ 
        public static function resetPassword()
        {
            return \Illuminate\Routing\Router::resetPassword();
        }
        
        /**
         * 
         *
         * @see \Laravel\Ui\AuthRouteMethods::confirmPassword()
         * @static 
         */ 
        public static function confirmPassword()
        {
            return \Illuminate\Routing\Router::confirmPassword();
        }
        
        /**
         * 
         *
         * @see \Laravel\Ui\AuthRouteMethods::emailVerification()
         * @static 
         */ 
        public static function emailVerification()
        {
            return \Illuminate\Routing\Router::emailVerification();
        }
         
    }

    class Schema {
        
        /**
         * Create a database in the schema.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function createDatabase($name)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::createDatabase($name);
        }
        
        /**
         * Drop a database from the schema if the database exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function dropDatabaseIfExists($name)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::dropDatabaseIfExists($name);
        }
        
        /**
         * Determine if the given table exists.
         *
         * @param string $table
         * @return bool 
         * @static 
         */ 
        public static function hasTable($table)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::hasTable($table);
        }
        
        /**
         * Get the column listing for a given table.
         *
         * @param string $table
         * @return array 
         * @static 
         */ 
        public static function getColumnListing($table)
        {
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnListing($table);
        }
        
        /**
         * Drop all tables from the database.
         *
         * @return void 
         * @static 
         */ 
        public static function dropAllTables()
        {
            \Illuminate\Database\Schema\MySqlBuilder::dropAllTables();
        }
        
        /**
         * Drop all views from the database.
         *
         * @return void 
         * @static 
         */ 
        public static function dropAllViews()
        {
            \Illuminate\Database\Schema\MySqlBuilder::dropAllViews();
        }
        
        /**
         * Get all of the table names for the database.
         *
         * @return array 
         * @static 
         */ 
        public static function getAllTables()
        {
            return \Illuminate\Database\Schema\MySqlBuilder::getAllTables();
        }
        
        /**
         * Get all of the view names for the database.
         *
         * @return array 
         * @static 
         */ 
        public static function getAllViews()
        {
            return \Illuminate\Database\Schema\MySqlBuilder::getAllViews();
        }
        
        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @return void 
         * @static 
         */ 
        public static function defaultStringLength($length)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::defaultStringLength($length);
        }
        
        /**
         * Set the default morph key type for migrations.
         *
         * @param string $type
         * @return void 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function defaultMorphKeyType($type)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::defaultMorphKeyType($type);
        }
        
        /**
         * Set the default morph key type for migrations to UUIDs.
         *
         * @return void 
         * @static 
         */ 
        public static function morphUsingUuids()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::morphUsingUuids();
        }
        
        /**
         * Set the default morph key type for migrations to ULIDs.
         *
         * @return void 
         * @static 
         */ 
        public static function morphUsingUlids()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::morphUsingUlids();
        }
        
        /**
         * Attempt to use native schema operations for dropping, renaming, and modifying columns, even if Doctrine DBAL is installed.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function useNativeSchemaOperationsIfPossible($value = true)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::useNativeSchemaOperationsIfPossible($value);
        }
        
        /**
         * Determine if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @return bool 
         * @static 
         */ 
        public static function hasColumn($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumn($table, $column);
        }
        
        /**
         * Determine if the given table has given columns.
         *
         * @param string $table
         * @param array $columns
         * @return bool 
         * @static 
         */ 
        public static function hasColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::hasColumns($table, $columns);
        }
        
        /**
         * Execute a table builder callback if the given table has a given column.
         *
         * @param string $table
         * @param string $column
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function whenTableHasColumn($table, $column, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::whenTableHasColumn($table, $column, $callback);
        }
        
        /**
         * Execute a table builder callback if the given table doesn't have a given column.
         *
         * @param string $table
         * @param string $column
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function whenTableDoesntHaveColumn($table, $column, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::whenTableDoesntHaveColumn($table, $column, $callback);
        }
        
        /**
         * Get the data type for the given column name.
         *
         * @param string $table
         * @param string $column
         * @return string 
         * @static 
         */ 
        public static function getColumnType($table, $column)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getColumnType($table, $column);
        }
        
        /**
         * Modify a table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function table($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::table($table, $callback);
        }
        
        /**
         * Create a new table on the schema.
         *
         * @param string $table
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function create($table, $callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::create($table, $callback);
        }
        
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function drop($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::drop($table);
        }
        
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @return void 
         * @static 
         */ 
        public static function dropIfExists($table)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::dropIfExists($table);
        }
        
        /**
         * Drop columns from a table schema.
         *
         * @param string $table
         * @param string|array $columns
         * @return void 
         * @static 
         */ 
        public static function dropColumns($table, $columns)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::dropColumns($table, $columns);
        }
        
        /**
         * Drop all types from the database.
         *
         * @return void 
         * @throws \LogicException
         * @static 
         */ 
        public static function dropAllTypes()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::dropAllTypes();
        }
        
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @return void 
         * @static 
         */ 
        public static function rename($from, $to)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::rename($from, $to);
        }
        
        /**
         * Enable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function enableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::enableForeignKeyConstraints();
        }
        
        /**
         * Disable foreign key constraints.
         *
         * @return bool 
         * @static 
         */ 
        public static function disableForeignKeyConstraints()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::disableForeignKeyConstraints();
        }
        
        /**
         * Disable foreign key constraints during the execution of a callback.
         *
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function withoutForeignKeyConstraints($callback)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::withoutForeignKeyConstraints($callback);
        }
        
        /**
         * Get the database connection instance.
         *
         * @return \Illuminate\Database\Connection 
         * @static 
         */ 
        public static function getConnection()
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::getConnection();
        }
        
        /**
         * Set the database connection instance.
         *
         * @param \Illuminate\Database\Connection $connection
         * @return \Illuminate\Database\Schema\MySqlBuilder 
         * @static 
         */ 
        public static function setConnection($connection)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            return \Illuminate\Database\Schema\MySqlBuilder::setConnection($connection);
        }
        
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function blueprintResolver($resolver)
        {
            //Method inherited from \Illuminate\Database\Schema\Builder            
            \Illuminate\Database\Schema\MySqlBuilder::blueprintResolver($resolver);
        }
         
    }

    class Session {
        
        /**
         * Determine if requests for the same session should wait for each to finish before executing.
         *
         * @return bool 
         * @static 
         */ 
        public static function shouldBlock()
        {
            return \Illuminate\Session\SessionManager::shouldBlock();
        }
        
        /**
         * Get the name of the cache store / driver that should be used to acquire session locks.
         *
         * @return string|null 
         * @static 
         */ 
        public static function blockDriver()
        {
            return \Illuminate\Session\SessionManager::blockDriver();
        }
        
        /**
         * Get the session configuration.
         *
         * @return array 
         * @static 
         */ 
        public static function getSessionConfig()
        {
            return \Illuminate\Session\SessionManager::getSessionConfig();
        }
        
        /**
         * Get the default session driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Session\SessionManager::getDefaultDriver();
        }
        
        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setDefaultDriver($name)
        {
            \Illuminate\Session\SessionManager::setDefaultDriver($name);
        }
        
        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function driver($driver = null)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::driver($driver);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Session\SessionManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::extend($driver, $callback);
        }
        
        /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */ 
        public static function getDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getDrivers();
        }
        
        /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::getContainer();
        }
        
        /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Session\SessionManager 
         * @static 
         */ 
        public static function setContainer($container)
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::setContainer($container);
        }
        
        /**
         * Forget all of the resolved driver instances.
         *
         * @return \Illuminate\Session\SessionManager 
         * @static 
         */ 
        public static function forgetDrivers()
        {
            //Method inherited from \Illuminate\Support\Manager            
            return \Illuminate\Session\SessionManager::forgetDrivers();
        }
        
        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool 
         * @static 
         */ 
        public static function start()
        {
            return \Illuminate\Session\Store::start();
        }
        
        /**
         * Save the session data to storage.
         *
         * @return void 
         * @static 
         */ 
        public static function save()
        {
            \Illuminate\Session\Store::save();
        }
        
        /**
         * Age the flash data for the session.
         *
         * @return void 
         * @static 
         */ 
        public static function ageFlashData()
        {
            \Illuminate\Session\Store::ageFlashData();
        }
        
        /**
         * Get all of the session data.
         *
         * @return array 
         * @static 
         */ 
        public static function all()
        {
            return \Illuminate\Session\Store::all();
        }
        
        /**
         * Get a subset of the session data.
         *
         * @param array $keys
         * @return array 
         * @static 
         */ 
        public static function only($keys)
        {
            return \Illuminate\Session\Store::only($keys);
        }
        
        /**
         * Checks if a key exists.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function exists($key)
        {
            return \Illuminate\Session\Store::exists($key);
        }
        
        /**
         * Determine if the given key is missing from the session data.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function missing($key)
        {
            return \Illuminate\Session\Store::missing($key);
        }
        
        /**
         * Checks if a key is present and not null.
         *
         * @param string|array $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            return \Illuminate\Session\Store::has($key);
        }
        
        /**
         * Get an item from the session.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            return \Illuminate\Session\Store::get($key, $default);
        }
        
        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
            return \Illuminate\Session\Store::pull($key, $default);
        }
        
        /**
         * Determine if the session contains old input.
         *
         * @param string|null $key
         * @return bool 
         * @static 
         */ 
        public static function hasOldInput($key = null)
        {
            return \Illuminate\Session\Store::hasOldInput($key);
        }
        
        /**
         * Get the requested item from the flashed input array.
         *
         * @param string|null $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function getOldInput($key = null, $default = null)
        {
            return \Illuminate\Session\Store::getOldInput($key, $default);
        }
        
        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @return void 
         * @static 
         */ 
        public static function replace($attributes)
        {
            \Illuminate\Session\Store::replace($attributes);
        }
        
        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param string|array $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function put($key, $value = null)
        {
            \Illuminate\Session\Store::put($key, $value);
        }
        
        /**
         * Get an item from the session, or store the default value.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed 
         * @static 
         */ 
        public static function remember($key, $callback)
        {
            return \Illuminate\Session\Store::remember($key, $callback);
        }
        
        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function push($key, $value)
        {
            \Illuminate\Session\Store::push($key, $value);
        }
        
        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return mixed 
         * @static 
         */ 
        public static function increment($key, $amount = 1)
        {
            return \Illuminate\Session\Store::increment($key, $amount);
        }
        
        /**
         * Decrement the value of an item in the session.
         *
         * @param string $key
         * @param int $amount
         * @return int 
         * @static 
         */ 
        public static function decrement($key, $amount = 1)
        {
            return \Illuminate\Session\Store::decrement($key, $amount);
        }
        
        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function flash($key, $value = true)
        {
            \Illuminate\Session\Store::flash($key, $value);
        }
        
        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @param mixed $value
         * @return void 
         * @static 
         */ 
        public static function now($key, $value)
        {
            \Illuminate\Session\Store::now($key, $value);
        }
        
        /**
         * Reflash all of the session flash data.
         *
         * @return void 
         * @static 
         */ 
        public static function reflash()
        {
            \Illuminate\Session\Store::reflash();
        }
        
        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @return void 
         * @static 
         */ 
        public static function keep($keys = null)
        {
            \Illuminate\Session\Store::keep($keys);
        }
        
        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @return void 
         * @static 
         */ 
        public static function flashInput($value)
        {
            \Illuminate\Session\Store::flashInput($value);
        }
        
        /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         * @return mixed 
         * @static 
         */ 
        public static function remove($key)
        {
            return \Illuminate\Session\Store::remove($key);
        }
        
        /**
         * Remove one or many items from the session.
         *
         * @param string|array $keys
         * @return void 
         * @static 
         */ 
        public static function forget($keys)
        {
            \Illuminate\Session\Store::forget($keys);
        }
        
        /**
         * Remove all of the items from the session.
         *
         * @return void 
         * @static 
         */ 
        public static function flush()
        {
            \Illuminate\Session\Store::flush();
        }
        
        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool 
         * @static 
         */ 
        public static function invalidate()
        {
            return \Illuminate\Session\Store::invalidate();
        }
        
        /**
         * Generate a new session identifier.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function regenerate($destroy = false)
        {
            return \Illuminate\Session\Store::regenerate($destroy);
        }
        
        /**
         * Generate a new session ID for the session.
         *
         * @param bool $destroy
         * @return bool 
         * @static 
         */ 
        public static function migrate($destroy = false)
        {
            return \Illuminate\Session\Store::migrate($destroy);
        }
        
        /**
         * Determine if the session has been started.
         *
         * @return bool 
         * @static 
         */ 
        public static function isStarted()
        {
            return \Illuminate\Session\Store::isStarted();
        }
        
        /**
         * Get the name of the session.
         *
         * @return string 
         * @static 
         */ 
        public static function getName()
        {
            return \Illuminate\Session\Store::getName();
        }
        
        /**
         * Set the name of the session.
         *
         * @param string $name
         * @return void 
         * @static 
         */ 
        public static function setName($name)
        {
            \Illuminate\Session\Store::setName($name);
        }
        
        /**
         * Get the current session ID.
         *
         * @return string 
         * @static 
         */ 
        public static function getId()
        {
            return \Illuminate\Session\Store::getId();
        }
        
        /**
         * Set the session ID.
         *
         * @param string|null $id
         * @return void 
         * @static 
         */ 
        public static function setId($id)
        {
            \Illuminate\Session\Store::setId($id);
        }
        
        /**
         * Determine if this is a valid session ID.
         *
         * @param string|null $id
         * @return bool 
         * @static 
         */ 
        public static function isValidId($id)
        {
            return \Illuminate\Session\Store::isValidId($id);
        }
        
        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @return void 
         * @static 
         */ 
        public static function setExists($value)
        {
            \Illuminate\Session\Store::setExists($value);
        }
        
        /**
         * Get the CSRF token value.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
            return \Illuminate\Session\Store::token();
        }
        
        /**
         * Regenerate the CSRF token value.
         *
         * @return void 
         * @static 
         */ 
        public static function regenerateToken()
        {
            \Illuminate\Session\Store::regenerateToken();
        }
        
        /**
         * Get the previous URL from the session.
         *
         * @return string|null 
         * @static 
         */ 
        public static function previousUrl()
        {
            return \Illuminate\Session\Store::previousUrl();
        }
        
        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @return void 
         * @static 
         */ 
        public static function setPreviousUrl($url)
        {
            \Illuminate\Session\Store::setPreviousUrl($url);
        }
        
        /**
         * Specify that the user has confirmed their password.
         *
         * @return void 
         * @static 
         */ 
        public static function passwordConfirmed()
        {
            \Illuminate\Session\Store::passwordConfirmed();
        }
        
        /**
         * Get the underlying session handler implementation.
         *
         * @return \SessionHandlerInterface 
         * @static 
         */ 
        public static function getHandler()
        {
            return \Illuminate\Session\Store::getHandler();
        }
        
        /**
         * Set the underlying session handler implementation.
         *
         * @param \SessionHandlerInterface $handler
         * @return \SessionHandlerInterface 
         * @static 
         */ 
        public static function setHandler($handler)
        {
            return \Illuminate\Session\Store::setHandler($handler);
        }
        
        /**
         * Determine if the session handler needs a request.
         *
         * @return bool 
         * @static 
         */ 
        public static function handlerNeedsRequest()
        {
            return \Illuminate\Session\Store::handlerNeedsRequest();
        }
        
        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequestOnHandler($request)
        {
            \Illuminate\Session\Store::setRequestOnHandler($request);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Session\Store::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Session\Store::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Session\Store::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Session\Store::flushMacros();
        }
         
    }

    class Storage {
        
        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function drive($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::drive($name);
        }
        
        /**
         * Get a filesystem instance.
         *
         * @param string|null $name
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function disk($name = null)
        {
            return \Illuminate\Filesystem\FilesystemManager::disk($name);
        }
        
        /**
         * Get a default cloud filesystem instance.
         *
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function cloud()
        {
            return \Illuminate\Filesystem\FilesystemManager::cloud();
        }
        
        /**
         * Build an on-demand disk.
         *
         * @param string|array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function build($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::build($config);
        }
        
        /**
         * Create an instance of the local driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createLocalDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createLocalDriver($config);
        }
        
        /**
         * Create an instance of the ftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createFtpDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createFtpDriver($config);
        }
        
        /**
         * Create an instance of the sftp driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createSftpDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createSftpDriver($config);
        }
        
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param array $config
         * @return \Illuminate\Contracts\Filesystem\Cloud 
         * @static 
         */ 
        public static function createS3Driver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createS3Driver($config);
        }
        
        /**
         * Create a scoped driver.
         *
         * @param array $config
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function createScopedDriver($config)
        {
            return \Illuminate\Filesystem\FilesystemManager::createScopedDriver($config);
        }
        
        /**
         * Set the given disk instance.
         *
         * @param string $name
         * @param mixed $disk
         * @return \Illuminate\Filesystem\FilesystemManager 
         * @static 
         */ 
        public static function set($name, $disk)
        {
            return \Illuminate\Filesystem\FilesystemManager::set($name, $disk);
        }
        
        /**
         * Get the default driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultDriver();
        }
        
        /**
         * Get the default cloud driver name.
         *
         * @return string 
         * @static 
         */ 
        public static function getDefaultCloudDriver()
        {
            return \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver();
        }
        
        /**
         * Unset the given disk instances.
         *
         * @param array|string $disk
         * @return \Illuminate\Filesystem\FilesystemManager 
         * @static 
         */ 
        public static function forgetDisk($disk)
        {
            return \Illuminate\Filesystem\FilesystemManager::forgetDisk($disk);
        }
        
        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */ 
        public static function purge($name = null)
        {
            \Illuminate\Filesystem\FilesystemManager::purge($name);
        }
        
        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Filesystem\FilesystemManager 
         * @static 
         */ 
        public static function extend($driver, $callback)
        {
            return \Illuminate\Filesystem\FilesystemManager::extend($driver, $callback);
        }
        
        /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Filesystem\FilesystemManager 
         * @static 
         */ 
        public static function setApplication($app)
        {
            return \Illuminate\Filesystem\FilesystemManager::setApplication($app);
        }
        
        /**
         * Assert that the given file or directory exists.
         *
         * @param string|array $path
         * @param string|null $content
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function assertExists($path, $content = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::assertExists($path, $content);
        }
        
        /**
         * Assert that the given file or directory does not exist.
         *
         * @param string|array $path
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function assertMissing($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::assertMissing($path);
        }
        
        /**
         * Assert that the given directory is empty.
         *
         * @param string $path
         * @return \Illuminate\Filesystem\FilesystemAdapter 
         * @static 
         */ 
        public static function assertDirectoryEmpty($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::assertDirectoryEmpty($path);
        }
        
        /**
         * Determine if a file or directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function exists($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::exists($path);
        }
        
        /**
         * Determine if a file or directory is missing.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function missing($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::missing($path);
        }
        
        /**
         * Determine if a file exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function fileExists($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::fileExists($path);
        }
        
        /**
         * Determine if a file is missing.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function fileMissing($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::fileMissing($path);
        }
        
        /**
         * Determine if a directory exists.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function directoryExists($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::directoryExists($path);
        }
        
        /**
         * Determine if a directory is missing.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function directoryMissing($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::directoryMissing($path);
        }
        
        /**
         * Get the full path for the file at the given "short" path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function path($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::path($path);
        }
        
        /**
         * Get the contents of a file.
         *
         * @param string $path
         * @return string|null 
         * @static 
         */ 
        public static function get($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::get($path);
        }
        
        /**
         * Get the contents of a file as decoded JSON.
         *
         * @param string $path
         * @param int $flags
         * @return array|null 
         * @static 
         */ 
        public static function json($path, $flags = 0)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::json($path, $flags);
        }
        
        /**
         * Create a streamed response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @param array $headers
         * @param string|null $disposition
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::response($path, $name, $headers, $disposition);
        }
        
        /**
         * Create a streamed download response for a given file.
         *
         * @param string $path
         * @param string|null $name
         * @return \Symfony\Component\HttpFoundation\StreamedResponse 
         * @static 
         */ 
        public static function download($path, $name = null, $headers = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::download($path, $name, $headers);
        }
        
        /**
         * Write the contents of a file.
         *
         * @param string $path
         * @param \Psr\Http\Message\StreamInterface|\Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|resource $contents
         * @param mixed $options
         * @return string|bool 
         * @static 
         */ 
        public static function put($path, $contents, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::put($path, $contents, $options);
        }
        
        /**
         * Store the uploaded file on the disk.
         *
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|array|null $file
         * @param mixed $options
         * @return string|false 
         * @static 
         */ 
        public static function putFile($path, $file = null, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFile($path, $file, $options);
        }
        
        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string $path
         * @param \Illuminate\Http\File|\Illuminate\Http\UploadedFile|string|array|null $file
         * @param string|array|null $name
         * @param mixed $options
         * @return string|false 
         * @static 
         */ 
        public static function putFileAs($path, $file, $name = null, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::putFileAs($path, $file, $name, $options);
        }
        
        /**
         * Get the visibility for the given path.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function getVisibility($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getVisibility($path);
        }
        
        /**
         * Set the visibility for the given path.
         *
         * @param string $path
         * @param string $visibility
         * @return bool 
         * @static 
         */ 
        public static function setVisibility($path, $visibility)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::setVisibility($path, $visibility);
        }
        
        /**
         * Prepend to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool 
         * @static 
         */ 
        public static function prepend($path, $data, $separator = '
')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::prepend($path, $data, $separator);
        }
        
        /**
         * Append to a file.
         *
         * @param string $path
         * @param string $data
         * @param string $separator
         * @return bool 
         * @static 
         */ 
        public static function append($path, $data, $separator = '
')
        {
            return \Illuminate\Filesystem\FilesystemAdapter::append($path, $data, $separator);
        }
        
        /**
         * Delete the file at a given path.
         *
         * @param string|array $paths
         * @return bool 
         * @static 
         */ 
        public static function delete($paths)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::delete($paths);
        }
        
        /**
         * Copy a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function copy($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::copy($from, $to);
        }
        
        /**
         * Move a file to a new location.
         *
         * @param string $from
         * @param string $to
         * @return bool 
         * @static 
         */ 
        public static function move($from, $to)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::move($from, $to);
        }
        
        /**
         * Get the file size of a given file.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function size($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::size($path);
        }
        
        /**
         * Get the checksum for a file.
         *
         * @return string|false 
         * @throws UnableToProvideChecksum
         * @static 
         */ 
        public static function checksum($path, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::checksum($path, $options);
        }
        
        /**
         * Get the mime-type of a given file.
         *
         * @param string $path
         * @return string|false 
         * @static 
         */ 
        public static function mimeType($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::mimeType($path);
        }
        
        /**
         * Get the file's last modification time.
         *
         * @param string $path
         * @return int 
         * @static 
         */ 
        public static function lastModified($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::lastModified($path);
        }
        
        /**
         * Get a resource to read the file.
         *
         * @param string $path
         * @return resource|null The path resource or null on failure.
         * @static 
         */ 
        public static function readStream($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::readStream($path);
        }
        
        /**
         * Write a new file using a stream.
         *
         * @param string $path
         * @param resource $resource
         * @param array $options
         * @return bool 
         * @static 
         */ 
        public static function writeStream($path, $resource, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::writeStream($path, $resource, $options);
        }
        
        /**
         * Get the URL for the file at the given path.
         *
         * @param string $path
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function url($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::url($path);
        }
        
        /**
         * Determine if temporary URLs can be generated.
         *
         * @return bool 
         * @static 
         */ 
        public static function providesTemporaryUrls()
        {
            return \Illuminate\Filesystem\FilesystemAdapter::providesTemporaryUrls();
        }
        
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return string 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function temporaryUrl($path, $expiration, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::temporaryUrl($path, $expiration, $options);
        }
        
        /**
         * Get a temporary upload URL for the file at the given path.
         *
         * @param string $path
         * @param \DateTimeInterface $expiration
         * @param array $options
         * @return array 
         * @throws \RuntimeException
         * @static 
         */ 
        public static function temporaryUploadUrl($path, $expiration, $options = [])
        {
            return \Illuminate\Filesystem\FilesystemAdapter::temporaryUploadUrl($path, $expiration, $options);
        }
        
        /**
         * Get an array of all files in a directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function files($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::files($directory, $recursive);
        }
        
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allFiles($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allFiles($directory);
        }
        
        /**
         * Get all of the directories within a given directory.
         *
         * @param string|null $directory
         * @param bool $recursive
         * @return array 
         * @static 
         */ 
        public static function directories($directory = null, $recursive = false)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::directories($directory, $recursive);
        }
        
        /**
         * Get all the directories within a given directory (recursive).
         *
         * @param string|null $directory
         * @return array 
         * @static 
         */ 
        public static function allDirectories($directory = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::allDirectories($directory);
        }
        
        /**
         * Create a directory.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function makeDirectory($path)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::makeDirectory($path);
        }
        
        /**
         * Recursively delete a directory.
         *
         * @param string $directory
         * @return bool 
         * @static 
         */ 
        public static function deleteDirectory($directory)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::deleteDirectory($directory);
        }
        
        /**
         * Get the Flysystem driver.
         *
         * @return \League\Flysystem\FilesystemOperator 
         * @static 
         */ 
        public static function getDriver()
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getDriver();
        }
        
        /**
         * Get the Flysystem adapter.
         *
         * @return \League\Flysystem\FilesystemAdapter 
         * @static 
         */ 
        public static function getAdapter()
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getAdapter();
        }
        
        /**
         * Get the configuration values.
         *
         * @return array 
         * @static 
         */ 
        public static function getConfig()
        {
            return \Illuminate\Filesystem\FilesystemAdapter::getConfig();
        }
        
        /**
         * Define a custom temporary URL builder callback.
         *
         * @param \Closure $callback
         * @return void 
         * @static 
         */ 
        public static function buildTemporaryUrlsUsing($callback)
        {
            \Illuminate\Filesystem\FilesystemAdapter::buildTemporaryUrlsUsing($callback);
        }
        
        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TWhenParameter)|TWhenParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TWhenReturnType 
         * @static 
         */ 
        public static function when($value = null, $callback = null, $default = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::when($value, $callback, $default);
        }
        
        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param \Illuminate\Filesystem\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Filesystem\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         * @return $this|\Illuminate\Filesystem\TUnlessReturnType 
         * @static 
         */ 
        public static function unless($value = null, $callback = null, $default = null)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::unless($value, $callback, $default);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Filesystem\FilesystemAdapter::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Filesystem\FilesystemAdapter::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Filesystem\FilesystemAdapter::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Illuminate\Filesystem\FilesystemAdapter::macroCall($method, $parameters);
        }
         
    }

    class URL {
        
        /**
         * Get the full URL for the current request.
         *
         * @return string 
         * @static 
         */ 
        public static function full()
        {
            return \Illuminate\Routing\UrlGenerator::full();
        }
        
        /**
         * Get the current URL for the request.
         *
         * @return string 
         * @static 
         */ 
        public static function current()
        {
            return \Illuminate\Routing\UrlGenerator::current();
        }
        
        /**
         * Get the URL for the previous request.
         *
         * @param mixed $fallback
         * @return string 
         * @static 
         */ 
        public static function previous($fallback = false)
        {
            return \Illuminate\Routing\UrlGenerator::previous($fallback);
        }
        
        /**
         * Get the previous path info for the request.
         *
         * @param mixed $fallback
         * @return string 
         * @static 
         */ 
        public static function previousPath($fallback = false)
        {
            return \Illuminate\Routing\UrlGenerator::previousPath($fallback);
        }
        
        /**
         * Generate an absolute URL to the given path.
         *
         * @param string $path
         * @param mixed $extra
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function to($path, $extra = [], $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::to($path, $extra, $secure);
        }
        
        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param string $path
         * @param array $parameters
         * @return string 
         * @static 
         */ 
        public static function secure($path, $parameters = [])
        {
            return \Illuminate\Routing\UrlGenerator::secure($path, $parameters);
        }
        
        /**
         * Generate the URL to an application asset.
         *
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function asset($path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::asset($path, $secure);
        }
        
        /**
         * Generate the URL to a secure asset.
         *
         * @param string $path
         * @return string 
         * @static 
         */ 
        public static function secureAsset($path)
        {
            return \Illuminate\Routing\UrlGenerator::secureAsset($path);
        }
        
        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param string $root
         * @param string $path
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function assetFrom($root, $path, $secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::assetFrom($root, $path, $secure);
        }
        
        /**
         * Get the default scheme for a raw URL.
         *
         * @param bool|null $secure
         * @return string 
         * @static 
         */ 
        public static function formatScheme($secure = null)
        {
            return \Illuminate\Routing\UrlGenerator::formatScheme($secure);
        }
        
        /**
         * Create a signed route URL for a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param \DateTimeInterface|\DateInterval|int|null $expiration
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function signedRoute($name, $parameters = [], $expiration = null, $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::signedRoute($name, $parameters, $expiration, $absolute);
        }
        
        /**
         * Create a temporary signed route URL for a named route.
         *
         * @param string $name
         * @param \DateTimeInterface|\DateInterval|int $expiration
         * @param array $parameters
         * @param bool $absolute
         * @return string 
         * @static 
         */ 
        public static function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::temporarySignedRoute($name, $expiration, $parameters, $absolute);
        }
        
        /**
         * Determine if the given request has a valid signature.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @param array $ignoreQuery
         * @return bool 
         * @static 
         */ 
        public static function hasValidSignature($request, $absolute = true, $ignoreQuery = [])
        {
            return \Illuminate\Routing\UrlGenerator::hasValidSignature($request, $absolute, $ignoreQuery);
        }
        
        /**
         * Determine if the given request has a valid signature for a relative URL.
         *
         * @param \Illuminate\Http\Request $request
         * @param array $ignoreQuery
         * @return bool 
         * @static 
         */ 
        public static function hasValidRelativeSignature($request, $ignoreQuery = [])
        {
            return \Illuminate\Routing\UrlGenerator::hasValidRelativeSignature($request, $ignoreQuery);
        }
        
        /**
         * Determine if the signature from the given request matches the URL.
         *
         * @param \Illuminate\Http\Request $request
         * @param bool $absolute
         * @param array $ignoreQuery
         * @return bool 
         * @static 
         */ 
        public static function hasCorrectSignature($request, $absolute = true, $ignoreQuery = [])
        {
            return \Illuminate\Routing\UrlGenerator::hasCorrectSignature($request, $absolute, $ignoreQuery);
        }
        
        /**
         * Determine if the expires timestamp from the given request is not from the past.
         *
         * @param \Illuminate\Http\Request $request
         * @return bool 
         * @static 
         */ 
        public static function signatureHasNotExpired($request)
        {
            return \Illuminate\Routing\UrlGenerator::signatureHasNotExpired($request);
        }
        
        /**
         * Get the URL to a named route.
         *
         * @param string $name
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException
         * @static 
         */ 
        public static function route($name, $parameters = [], $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::route($name, $parameters, $absolute);
        }
        
        /**
         * Get the URL for a given route instance.
         *
         * @param \Illuminate\Routing\Route $route
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \Illuminate\Routing\Exceptions\UrlGenerationException
         * @static 
         */ 
        public static function toRoute($route, $parameters, $absolute)
        {
            return \Illuminate\Routing\UrlGenerator::toRoute($route, $parameters, $absolute);
        }
        
        /**
         * Get the URL to a controller action.
         *
         * @param string|array $action
         * @param mixed $parameters
         * @param bool $absolute
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function action($action, $parameters = [], $absolute = true)
        {
            return \Illuminate\Routing\UrlGenerator::action($action, $parameters, $absolute);
        }
        
        /**
         * Format the array of URL parameters.
         *
         * @param mixed|array $parameters
         * @return array 
         * @static 
         */ 
        public static function formatParameters($parameters)
        {
            return \Illuminate\Routing\UrlGenerator::formatParameters($parameters);
        }
        
        /**
         * Get the base URL for the request.
         *
         * @param string $scheme
         * @param string|null $root
         * @return string 
         * @static 
         */ 
        public static function formatRoot($scheme, $root = null)
        {
            return \Illuminate\Routing\UrlGenerator::formatRoot($scheme, $root);
        }
        
        /**
         * Format the given URL segments into a single URL.
         *
         * @param string $root
         * @param string $path
         * @param \Illuminate\Routing\Route|null $route
         * @return string 
         * @static 
         */ 
        public static function format($root, $path, $route = null)
        {
            return \Illuminate\Routing\UrlGenerator::format($root, $path, $route);
        }
        
        /**
         * Determine if the given path is a valid URL.
         *
         * @param string $path
         * @return bool 
         * @static 
         */ 
        public static function isValidUrl($path)
        {
            return \Illuminate\Routing\UrlGenerator::isValidUrl($path);
        }
        
        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @return void 
         * @static 
         */ 
        public static function defaults($defaults)
        {
            \Illuminate\Routing\UrlGenerator::defaults($defaults);
        }
        
        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array 
         * @static 
         */ 
        public static function getDefaultParameters()
        {
            return \Illuminate\Routing\UrlGenerator::getDefaultParameters();
        }
        
        /**
         * Force the scheme for URLs.
         *
         * @param string|null $scheme
         * @return void 
         * @static 
         */ 
        public static function forceScheme($scheme)
        {
            \Illuminate\Routing\UrlGenerator::forceScheme($scheme);
        }
        
        /**
         * Set the forced root URL.
         *
         * @param string|null $root
         * @return void 
         * @static 
         */ 
        public static function forceRootUrl($root)
        {
            \Illuminate\Routing\UrlGenerator::forceRootUrl($root);
        }
        
        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param \Closure $callback
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function formatHostUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatHostUsing($callback);
        }
        
        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param \Closure $callback
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function formatPathUsing($callback)
        {
            return \Illuminate\Routing\UrlGenerator::formatPathUsing($callback);
        }
        
        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return \Closure 
         * @static 
         */ 
        public static function pathFormatter()
        {
            return \Illuminate\Routing\UrlGenerator::pathFormatter();
        }
        
        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */ 
        public static function getRequest()
        {
            return \Illuminate\Routing\UrlGenerator::getRequest();
        }
        
        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @return void 
         * @static 
         */ 
        public static function setRequest($request)
        {
            \Illuminate\Routing\UrlGenerator::setRequest($request);
        }
        
        /**
         * Set the route collection.
         *
         * @param \Illuminate\Routing\RouteCollectionInterface $routes
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function setRoutes($routes)
        {
            return \Illuminate\Routing\UrlGenerator::setRoutes($routes);
        }
        
        /**
         * Set the session resolver for the generator.
         *
         * @param callable $sessionResolver
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function setSessionResolver($sessionResolver)
        {
            return \Illuminate\Routing\UrlGenerator::setSessionResolver($sessionResolver);
        }
        
        /**
         * Set the encryption key resolver.
         *
         * @param callable $keyResolver
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function setKeyResolver($keyResolver)
        {
            return \Illuminate\Routing\UrlGenerator::setKeyResolver($keyResolver);
        }
        
        /**
         * Clone a new instance of the URL generator with a different encryption key resolver.
         *
         * @param callable $keyResolver
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function withKeyResolver($keyResolver)
        {
            return \Illuminate\Routing\UrlGenerator::withKeyResolver($keyResolver);
        }
        
        /**
         * Get the root controller namespace.
         *
         * @return string 
         * @static 
         */ 
        public static function getRootControllerNamespace()
        {
            return \Illuminate\Routing\UrlGenerator::getRootControllerNamespace();
        }
        
        /**
         * Set the root controller namespace.
         *
         * @param string $rootNamespace
         * @return \Illuminate\Routing\UrlGenerator 
         * @static 
         */ 
        public static function setRootControllerNamespace($rootNamespace)
        {
            return \Illuminate\Routing\UrlGenerator::setRootControllerNamespace($rootNamespace);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Routing\UrlGenerator::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Routing\UrlGenerator::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Routing\UrlGenerator::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Routing\UrlGenerator::flushMacros();
        }
         
    }

    class Validator {
        
        /**
         * Create a new Validator instance.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $attributes
         * @return \Illuminate\Validation\Validator 
         * @static 
         */ 
        public static function make($data, $rules, $messages = [], $attributes = [])
        {
            return \Illuminate\Validation\Factory::make($data, $rules, $messages, $attributes);
        }
        
        /**
         * Validate the given data against the provided rules.
         *
         * @param array $data
         * @param array $rules
         * @param array $messages
         * @param array $attributes
         * @return array 
         * @throws \Illuminate\Validation\ValidationException
         * @static 
         */ 
        public static function validate($data, $rules, $messages = [], $attributes = [])
        {
            return \Illuminate\Validation\Factory::validate($data, $rules, $messages, $attributes);
        }
        
        /**
         * Register a custom validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void 
         * @static 
         */ 
        public static function extend($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extend($rule, $extension, $message);
        }
        
        /**
         * Register a custom implicit validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void 
         * @static 
         */ 
        public static function extendImplicit($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendImplicit($rule, $extension, $message);
        }
        
        /**
         * Register a custom dependent validator extension.
         *
         * @param string $rule
         * @param \Closure|string $extension
         * @param string|null $message
         * @return void 
         * @static 
         */ 
        public static function extendDependent($rule, $extension, $message = null)
        {
            \Illuminate\Validation\Factory::extendDependent($rule, $extension, $message);
        }
        
        /**
         * Register a custom validator message replacer.
         *
         * @param string $rule
         * @param \Closure|string $replacer
         * @return void 
         * @static 
         */ 
        public static function replacer($rule, $replacer)
        {
            \Illuminate\Validation\Factory::replacer($rule, $replacer);
        }
        
        /**
         * Indicate that unvalidated array keys should be included in validated data when the parent array is validated.
         *
         * @return void 
         * @static 
         */ 
        public static function includeUnvalidatedArrayKeys()
        {
            \Illuminate\Validation\Factory::includeUnvalidatedArrayKeys();
        }
        
        /**
         * Indicate that unvalidated array keys should be excluded from the validated data, even if the parent array was validated.
         *
         * @return void 
         * @static 
         */ 
        public static function excludeUnvalidatedArrayKeys()
        {
            \Illuminate\Validation\Factory::excludeUnvalidatedArrayKeys();
        }
        
        /**
         * Set the Validator instance resolver.
         *
         * @param \Closure $resolver
         * @return void 
         * @static 
         */ 
        public static function resolver($resolver)
        {
            \Illuminate\Validation\Factory::resolver($resolver);
        }
        
        /**
         * Get the Translator implementation.
         *
         * @return \Illuminate\Contracts\Translation\Translator 
         * @static 
         */ 
        public static function getTranslator()
        {
            return \Illuminate\Validation\Factory::getTranslator();
        }
        
        /**
         * Get the Presence Verifier implementation.
         *
         * @return \Illuminate\Validation\PresenceVerifierInterface 
         * @static 
         */ 
        public static function getPresenceVerifier()
        {
            return \Illuminate\Validation\Factory::getPresenceVerifier();
        }
        
        /**
         * Set the Presence Verifier implementation.
         *
         * @param \Illuminate\Validation\PresenceVerifierInterface $presenceVerifier
         * @return void 
         * @static 
         */ 
        public static function setPresenceVerifier($presenceVerifier)
        {
            \Illuminate\Validation\Factory::setPresenceVerifier($presenceVerifier);
        }
        
        /**
         * Get the container instance used by the validation factory.
         *
         * @return \Illuminate\Contracts\Container\Container|null 
         * @static 
         */ 
        public static function getContainer()
        {
            return \Illuminate\Validation\Factory::getContainer();
        }
        
        /**
         * Set the container instance used by the validation factory.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Illuminate\Validation\Factory 
         * @static 
         */ 
        public static function setContainer($container)
        {
            return \Illuminate\Validation\Factory::setContainer($container);
        }
         
    }

    class View {
        
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $path
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function file($path, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::file($path, $data, $mergeData);
        }
        
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @static 
         */ 
        public static function make($view, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::make($view, $data, $mergeData);
        }
        
        /**
         * Get the first view that actually exists from the given list.
         *
         * @param array $views
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return \Illuminate\Contracts\View\View 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function first($views, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::first($views, $data, $mergeData);
        }
        
        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return string 
         * @static 
         */ 
        public static function renderWhen($condition, $view, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::renderWhen($condition, $view, $data, $mergeData);
        }
        
        /**
         * Get the rendered content of the view based on the negation of a given condition.
         *
         * @param bool $condition
         * @param string $view
         * @param \Illuminate\Contracts\Support\Arrayable|array $data
         * @param array $mergeData
         * @return string 
         * @static 
         */ 
        public static function renderUnless($condition, $view, $data = [], $mergeData = [])
        {
            return \Illuminate\View\Factory::renderUnless($condition, $view, $data, $mergeData);
        }
        
        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param string $view
         * @param array $data
         * @param string $iterator
         * @param string $empty
         * @return string 
         * @static 
         */ 
        public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
            return \Illuminate\View\Factory::renderEach($view, $data, $iterator, $empty);
        }
        
        /**
         * Determine if a given view exists.
         *
         * @param string $view
         * @return bool 
         * @static 
         */ 
        public static function exists($view)
        {
            return \Illuminate\View\Factory::exists($view);
        }
        
        /**
         * Get the appropriate view engine for the given path.
         *
         * @param string $path
         * @return \Illuminate\Contracts\View\Engine 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function getEngineFromPath($path)
        {
            return \Illuminate\View\Factory::getEngineFromPath($path);
        }
        
        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed|null $value
         * @return mixed 
         * @static 
         */ 
        public static function share($key, $value = null)
        {
            return \Illuminate\View\Factory::share($key, $value);
        }
        
        /**
         * Increment the rendering counter.
         *
         * @return void 
         * @static 
         */ 
        public static function incrementRender()
        {
            \Illuminate\View\Factory::incrementRender();
        }
        
        /**
         * Decrement the rendering counter.
         *
         * @return void 
         * @static 
         */ 
        public static function decrementRender()
        {
            \Illuminate\View\Factory::decrementRender();
        }
        
        /**
         * Check if there are no active render operations.
         *
         * @return bool 
         * @static 
         */ 
        public static function doneRendering()
        {
            return \Illuminate\View\Factory::doneRendering();
        }
        
        /**
         * Determine if the given once token has been rendered.
         *
         * @param string $id
         * @return bool 
         * @static 
         */ 
        public static function hasRenderedOnce($id)
        {
            return \Illuminate\View\Factory::hasRenderedOnce($id);
        }
        
        /**
         * Mark the given once token as having been rendered.
         *
         * @param string $id
         * @return void 
         * @static 
         */ 
        public static function markAsRenderedOnce($id)
        {
            \Illuminate\View\Factory::markAsRenderedOnce($id);
        }
        
        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @return void 
         * @static 
         */ 
        public static function addLocation($location)
        {
            \Illuminate\View\Factory::addLocation($location);
        }
        
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory 
         * @static 
         */ 
        public static function addNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::addNamespace($namespace, $hints);
        }
        
        /**
         * Prepend a new namespace to the loader.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory 
         * @static 
         */ 
        public static function prependNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::prependNamespace($namespace, $hints);
        }
        
        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param string $namespace
         * @param string|array $hints
         * @return \Illuminate\View\Factory 
         * @static 
         */ 
        public static function replaceNamespace($namespace, $hints)
        {
            return \Illuminate\View\Factory::replaceNamespace($namespace, $hints);
        }
        
        /**
         * Register a valid view extension and its engine.
         *
         * @param string $extension
         * @param string $engine
         * @param \Closure|null $resolver
         * @return void 
         * @static 
         */ 
        public static function addExtension($extension, $engine, $resolver = null)
        {
            \Illuminate\View\Factory::addExtension($extension, $engine, $resolver);
        }
        
        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @return void 
         * @static 
         */ 
        public static function flushState()
        {
            \Illuminate\View\Factory::flushState();
        }
        
        /**
         * Flush all of the section contents if done rendering.
         *
         * @return void 
         * @static 
         */ 
        public static function flushStateIfDoneRendering()
        {
            \Illuminate\View\Factory::flushStateIfDoneRendering();
        }
        
        /**
         * Get the extension to engine bindings.
         *
         * @return array 
         * @static 
         */ 
        public static function getExtensions()
        {
            return \Illuminate\View\Factory::getExtensions();
        }
        
        /**
         * Get the engine resolver instance.
         *
         * @return \Illuminate\View\Engines\EngineResolver 
         * @static 
         */ 
        public static function getEngineResolver()
        {
            return \Illuminate\View\Factory::getEngineResolver();
        }
        
        /**
         * Get the view finder instance.
         *
         * @return \Illuminate\View\ViewFinderInterface 
         * @static 
         */ 
        public static function getFinder()
        {
            return \Illuminate\View\Factory::getFinder();
        }
        
        /**
         * Set the view finder instance.
         *
         * @param \Illuminate\View\ViewFinderInterface $finder
         * @return void 
         * @static 
         */ 
        public static function setFinder($finder)
        {
            \Illuminate\View\Factory::setFinder($finder);
        }
        
        /**
         * Flush the cache of views located by the finder.
         *
         * @return void 
         * @static 
         */ 
        public static function flushFinderCache()
        {
            \Illuminate\View\Factory::flushFinderCache();
        }
        
        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */ 
        public static function getDispatcher()
        {
            return \Illuminate\View\Factory::getDispatcher();
        }
        
        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */ 
        public static function setDispatcher($events)
        {
            \Illuminate\View\Factory::setDispatcher($events);
        }
        
        /**
         * Get the IoC container instance.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */ 
        public static function getContainer()
        {
            return \Illuminate\View\Factory::getContainer();
        }
        
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void 
         * @static 
         */ 
        public static function setContainer($container)
        {
            \Illuminate\View\Factory::setContainer($container);
        }
        
        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed 
         * @static 
         */ 
        public static function shared($key, $default = null)
        {
            return \Illuminate\View\Factory::shared($key, $default);
        }
        
        /**
         * Get all of the shared data for the environment.
         *
         * @return array 
         * @static 
         */ 
        public static function getShared()
        {
            return \Illuminate\View\Factory::getShared();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\View\Factory::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\View\Factory::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\View\Factory::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\View\Factory::flushMacros();
        }
        
        /**
         * Start a component rendering process.
         *
         * @param \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Htmlable|\Closure|string $view
         * @param array $data
         * @return void 
         * @static 
         */ 
        public static function startComponent($view, $data = [])
        {
            \Illuminate\View\Factory::startComponent($view, $data);
        }
        
        /**
         * Get the first view that actually exists from the given list, and start a component.
         *
         * @param array $names
         * @param array $data
         * @return void 
         * @static 
         */ 
        public static function startComponentFirst($names, $data = [])
        {
            \Illuminate\View\Factory::startComponentFirst($names, $data);
        }
        
        /**
         * Render the current component.
         *
         * @return string 
         * @static 
         */ 
        public static function renderComponent()
        {
            return \Illuminate\View\Factory::renderComponent();
        }
        
        /**
         * Get an item from the component data that exists above the current component.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed|null 
         * @static 
         */ 
        public static function getConsumableComponentData($key, $default = null)
        {
            return \Illuminate\View\Factory::getConsumableComponentData($key, $default);
        }
        
        /**
         * Start the slot rendering process.
         *
         * @param string $name
         * @param string|null $content
         * @param array $attributes
         * @return void 
         * @static 
         */ 
        public static function slot($name, $content = null, $attributes = [])
        {
            \Illuminate\View\Factory::slot($name, $content, $attributes);
        }
        
        /**
         * Save the slot content for rendering.
         *
         * @return void 
         * @static 
         */ 
        public static function endSlot()
        {
            \Illuminate\View\Factory::endSlot();
        }
        
        /**
         * Register a view creator event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
        public static function creator($views, $callback)
        {
            return \Illuminate\View\Factory::creator($views, $callback);
        }
        
        /**
         * Register multiple view composers via an array.
         *
         * @param array $composers
         * @return array 
         * @static 
         */ 
        public static function composers($composers)
        {
            return \Illuminate\View\Factory::composers($composers);
        }
        
        /**
         * Register a view composer event.
         *
         * @param array|string $views
         * @param \Closure|string $callback
         * @return array 
         * @static 
         */ 
        public static function composer($views, $callback)
        {
            return \Illuminate\View\Factory::composer($views, $callback);
        }
        
        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */ 
        public static function callComposer($view)
        {
            \Illuminate\View\Factory::callComposer($view);
        }
        
        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @return void 
         * @static 
         */ 
        public static function callCreator($view)
        {
            \Illuminate\View\Factory::callCreator($view);
        }
        
        /**
         * Start injecting content into a fragment.
         *
         * @param string $fragment
         * @return void 
         * @static 
         */ 
        public static function startFragment($fragment)
        {
            \Illuminate\View\Factory::startFragment($fragment);
        }
        
        /**
         * Stop injecting content into a fragment.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopFragment()
        {
            return \Illuminate\View\Factory::stopFragment();
        }
        
        /**
         * Get the contents of a fragment.
         *
         * @param string $name
         * @param string|null $default
         * @return mixed 
         * @static 
         */ 
        public static function getFragment($name, $default = null)
        {
            return \Illuminate\View\Factory::getFragment($name, $default);
        }
        
        /**
         * Get the entire array of rendered fragments.
         *
         * @return array 
         * @static 
         */ 
        public static function getFragments()
        {
            return \Illuminate\View\Factory::getFragments();
        }
        
        /**
         * Flush all of the fragments.
         *
         * @return void 
         * @static 
         */ 
        public static function flushFragments()
        {
            \Illuminate\View\Factory::flushFragments();
        }
        
        /**
         * Start injecting content into a section.
         *
         * @param string $section
         * @param string|null $content
         * @return void 
         * @static 
         */ 
        public static function startSection($section, $content = null)
        {
            \Illuminate\View\Factory::startSection($section, $content);
        }
        
        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function inject($section, $content)
        {
            \Illuminate\View\Factory::inject($section, $content);
        }
        
        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string 
         * @static 
         */ 
        public static function yieldSection()
        {
            return \Illuminate\View\Factory::yieldSection();
        }
        
        /**
         * Stop injecting content into a section.
         *
         * @param bool $overwrite
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopSection($overwrite = false)
        {
            return \Illuminate\View\Factory::stopSection($overwrite);
        }
        
        /**
         * Stop injecting content into a section and append it.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function appendSection()
        {
            return \Illuminate\View\Factory::appendSection();
        }
        
        /**
         * Get the string contents of a section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function yieldContent($section, $default = '')
        {
            return \Illuminate\View\Factory::yieldContent($section, $default);
        }
        
        /**
         * Get the parent placeholder for the current request.
         *
         * @param string $section
         * @return string 
         * @static 
         */ 
        public static function parentPlaceholder($section = '')
        {
            return \Illuminate\View\Factory::parentPlaceholder($section);
        }
        
        /**
         * Check if section exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasSection($name)
        {
            return \Illuminate\View\Factory::hasSection($name);
        }
        
        /**
         * Check if section does not exist.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function sectionMissing($name)
        {
            return \Illuminate\View\Factory::sectionMissing($name);
        }
        
        /**
         * Get the contents of a section.
         *
         * @param string $name
         * @param string|null $default
         * @return mixed 
         * @static 
         */ 
        public static function getSection($name, $default = null)
        {
            return \Illuminate\View\Factory::getSection($name, $default);
        }
        
        /**
         * Get the entire array of sections.
         *
         * @return array 
         * @static 
         */ 
        public static function getSections()
        {
            return \Illuminate\View\Factory::getSections();
        }
        
        /**
         * Flush all of the sections.
         *
         * @return void 
         * @static 
         */ 
        public static function flushSections()
        {
            \Illuminate\View\Factory::flushSections();
        }
        
        /**
         * Add new loop to the stack.
         *
         * @param \Countable|array $data
         * @return void 
         * @static 
         */ 
        public static function addLoop($data)
        {
            \Illuminate\View\Factory::addLoop($data);
        }
        
        /**
         * Increment the top loop's indices.
         *
         * @return void 
         * @static 
         */ 
        public static function incrementLoopIndices()
        {
            \Illuminate\View\Factory::incrementLoopIndices();
        }
        
        /**
         * Pop a loop from the top of the loop stack.
         *
         * @return void 
         * @static 
         */ 
        public static function popLoop()
        {
            \Illuminate\View\Factory::popLoop();
        }
        
        /**
         * Get an instance of the last loop in the stack.
         *
         * @return \stdClass|null 
         * @static 
         */ 
        public static function getLastLoop()
        {
            return \Illuminate\View\Factory::getLastLoop();
        }
        
        /**
         * Get the entire loop stack.
         *
         * @return array 
         * @static 
         */ 
        public static function getLoopStack()
        {
            return \Illuminate\View\Factory::getLoopStack();
        }
        
        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function startPush($section, $content = '')
        {
            \Illuminate\View\Factory::startPush($section, $content);
        }
        
        /**
         * Stop injecting content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopPush()
        {
            return \Illuminate\View\Factory::stopPush();
        }
        
        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         * @return void 
         * @static 
         */ 
        public static function startPrepend($section, $content = '')
        {
            \Illuminate\View\Factory::startPrepend($section, $content);
        }
        
        /**
         * Stop prepending content into a push section.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function stopPrepend()
        {
            return \Illuminate\View\Factory::stopPrepend();
        }
        
        /**
         * Get the string contents of a push section.
         *
         * @param string $section
         * @param string $default
         * @return string 
         * @static 
         */ 
        public static function yieldPushContent($section, $default = '')
        {
            return \Illuminate\View\Factory::yieldPushContent($section, $default);
        }
        
        /**
         * Flush all of the stacks.
         *
         * @return void 
         * @static 
         */ 
        public static function flushStacks()
        {
            \Illuminate\View\Factory::flushStacks();
        }
        
        /**
         * Start a translation block.
         *
         * @param array $replacements
         * @return void 
         * @static 
         */ 
        public static function startTranslation($replacements = [])
        {
            \Illuminate\View\Factory::startTranslation($replacements);
        }
        
        /**
         * Render the current translation.
         *
         * @return string 
         * @static 
         */ 
        public static function renderTranslation()
        {
            return \Illuminate\View\Factory::renderTranslation();
        }
         
    }

    class Vite {
        
        /**
         * Get the preloaded assets.
         *
         * @return array 
         * @static 
         */ 
        public static function preloadedAssets()
        {
            return \Illuminate\Foundation\Vite::preloadedAssets();
        }
        
        /**
         * Get the Content Security Policy nonce applied to all generated tags.
         *
         * @return string|null 
         * @static 
         */ 
        public static function cspNonce()
        {
            return \Illuminate\Foundation\Vite::cspNonce();
        }
        
        /**
         * Generate or set a Content Security Policy nonce to apply to all generated tags.
         *
         * @param string|null $nonce
         * @return string 
         * @static 
         */ 
        public static function useCspNonce($nonce = null)
        {
            return \Illuminate\Foundation\Vite::useCspNonce($nonce);
        }
        
        /**
         * Use the given key to detect integrity hashes in the manifest.
         *
         * @param string|false $key
         * @return \Illuminate\Foundation\Vite 
         * @static 
         */ 
        public static function useIntegrityKey($key)
        {
            return \Illuminate\Foundation\Vite::useIntegrityKey($key);
        }
        
        /**
         * Set the Vite entry points.
         *
         * @param array $entryPoints
         * @return \Illuminate\Foundation\Vite 
         * @static 
         */ 
        public static function withEntryPoints($entryPoints)
        {
            return \Illuminate\Foundation\Vite::withEntryPoints($entryPoints);
        }
        
        /**
         * Set the filename for the manifest file.
         *
         * @param string $filename
         * @return \Illuminate\Foundation\Vite 
         * @static 
         */ 
        public static function useManifestFilename($filename)
        {
            return \Illuminate\Foundation\Vite::useManifestFilename($filename);
        }
        
        /**
         * Get the Vite "hot" file path.
         *
         * @return string 
         * @static 
         */ 
        public static function hotFile()
        {
            return \Illuminate\Foundation\Vite::hotFile();
        }
        
        /**
         * Set the Vite "hot" file path.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Vite 
         * @static 
         */ 
        public static function useHotFile($path)
        {
            return \Illuminate\Foundation\Vite::useHotFile($path);
        }
        
        /**
         * Set the Vite build directory.
         *
         * @param string $path
         * @return \Illuminate\Foundation\Vite 
         * @static 
         */ 
        public static function useBuildDirectory($path)
        {
            return \Illuminate\Foundation\Vite::useBuildDirectory($path);
        }
        
        /**
         * Use the given callback to resolve attributes for script tags.
         *
         * @param \Illuminate\Foundation\(callable(string,  string, ?array, ?array): array)|array  $attributes
         * @return \Illuminate\Foundation\Vite 
         * @static 
         */ 
        public static function useScriptTagAttributes($attributes)
        {
            return \Illuminate\Foundation\Vite::useScriptTagAttributes($attributes);
        }
        
        /**
         * Use the given callback to resolve attributes for style tags.
         *
         * @param \Illuminate\Foundation\(callable(string,  string, ?array, ?array): array)|array  $attributes
         * @return \Illuminate\Foundation\Vite 
         * @static 
         */ 
        public static function useStyleTagAttributes($attributes)
        {
            return \Illuminate\Foundation\Vite::useStyleTagAttributes($attributes);
        }
        
        /**
         * Use the given callback to resolve attributes for preload tags.
         *
         * @param \Illuminate\Foundation\(callable(string,  string, ?array, ?array): (array|false))|array|false  $attributes
         * @return \Illuminate\Foundation\Vite 
         * @static 
         */ 
        public static function usePreloadTagAttributes($attributes)
        {
            return \Illuminate\Foundation\Vite::usePreloadTagAttributes($attributes);
        }
        
        /**
         * Generate React refresh runtime script.
         *
         * @return \Illuminate\Support\HtmlString|void 
         * @static 
         */ 
        public static function reactRefresh()
        {
            return \Illuminate\Foundation\Vite::reactRefresh();
        }
        
        /**
         * Get the URL for an asset.
         *
         * @param string $asset
         * @param string|null $buildDirectory
         * @return string 
         * @static 
         */ 
        public static function asset($asset, $buildDirectory = null)
        {
            return \Illuminate\Foundation\Vite::asset($asset, $buildDirectory);
        }
        
        /**
         * Get a unique hash representing the current manifest, or null if there is no manifest.
         *
         * @param string|null $buildDirectory
         * @return string|null 
         * @static 
         */ 
        public static function manifestHash($buildDirectory = null)
        {
            return \Illuminate\Foundation\Vite::manifestHash($buildDirectory);
        }
        
        /**
         * Determine if the HMR server is running.
         *
         * @return bool 
         * @static 
         */ 
        public static function isRunningHot()
        {
            return \Illuminate\Foundation\Vite::isRunningHot();
        }
        
        /**
         * Get the Vite tag content as a string of HTML.
         *
         * @return string 
         * @static 
         */ 
        public static function toHtml()
        {
            return \Illuminate\Foundation\Vite::toHtml();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Illuminate\Foundation\Vite::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Illuminate\Foundation\Vite::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Illuminate\Foundation\Vite::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Illuminate\Foundation\Vite::flushMacros();
        }
         
    }
 
}

namespace Illuminate\Support { 

    class Arr {
         
    }

    class Js {
         
    }

    class Str {
         
    }
 
}

namespace DaveJamesMiller\Breadcrumbs\Facades { 

    class Breadcrumbs {
        
        /**
         * Register a breadcrumb-generating callback for a page.
         *
         * @param string $name The name of the page.
         * @param callable $callback The callback, which should accept a Generator instance as the first parameter and may
         *     accept additional parameters.
         * @return void 
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\DuplicateBreadcrumbException If the given name has already been
         *     used.
         * @static 
         */ 
        public static function for($name, $callback)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::for($name, $callback);
        }
        
        /**
         * Register a breadcrumb-generating callback for a page.
         * 
         * For backwards-compatibility with v5.0.0 and below.
         *
         * @param string $name The name of the page.
         * @param callable $callback The callback, which should accept a Generator instance as the first parameter and may
         *     accept additional parameters.
         * @return void 
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\DuplicateBreadcrumbException If the given name has already been
         *     used.
         * @see self::for()
         * @static 
         */ 
        public static function register($name, $callback)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::register($name, $callback);
        }
        
        /**
         * Register a closure to call before generating breadcrumbs for the current page.
         * 
         * For example, this can be used to always prepend the homepage without needing to manually add it to each page.
         *
         * @param callable $callback The callback, which should accept a Generator instance as the first and only parameter.
         * @return void 
         * @static 
         */ 
        public static function before($callback)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::before($callback);
        }
        
        /**
         * Register a closure to call after generating breadcrumbs for the current page.
         * 
         * For example, this can be used to append the current page number when using pagination.
         *
         * @param callable $callback The callback, which should accept a Generator instance as the first and only parameter.
         * @return void 
         * @static 
         */ 
        public static function after($callback)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::after($callback);
        }
        
        /**
         * Check if a breadcrumb with the given name exists.
         * 
         * If no name is given, defaults to the current route name.
         *
         * @param string|null $name The page name.
         * @return bool Whether there is a registered callback with that name.
         * @static 
         */ 
        public static function exists($name = null)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::exists($name);
        }
        
        /**
         * Generate a set of breadcrumbs for a page.
         *
         * @param string|null $name The name of the current page.
         * @param mixed $params The parameters to pass to the closure for the current page.
         * @return \Illuminate\Support\Collection The generated breadcrumbs.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\UnnamedRouteException if no name is given and the current route
         *     doesn't have an associated name.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\InvalidBreadcrumbException if the name is (or any ancestor names
         *     are) not registered.
         * @static 
         */ 
        public static function generate($name = null, ...$params)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::generate($name, ...$params);
        }
        
        /**
         * Render breadcrumbs for a page with the specified view.
         *
         * @param string $view The name of the view to render.
         * @param string|null $name The name of the current page.
         * @param mixed $params The parameters to pass to the closure for the current page.
         * @return \Illuminate\Support\HtmlString The generated HTML.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\InvalidBreadcrumbException if the name is (or any ancestor names are) not registered.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\UnnamedRouteException if no name is given and the current route doesn't have an associated name.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\ViewNotSetException if no view has been set.
         * @static 
         */ 
        public static function view($view, $name = null, ...$params)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::view($view, $name, ...$params);
        }
        
        /**
         * Render breadcrumbs for a page with the default view.
         *
         * @param string|null $name The name of the current page.
         * @param mixed $params The parameters to pass to the closure for the current page.
         * @return \Illuminate\Support\HtmlString The generated HTML.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\InvalidBreadcrumbException if the name is (or any ancestor names are) not registered.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\UnnamedRouteException if no name is given and the current route doesn't have an associated name.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\ViewNotSetException if no view has been set.
         * @static 
         */ 
        public static function render($name = null, ...$params)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::render($name, ...$params);
        }
        
        /**
         * Get the last breadcrumb for the current page.
         * 
         * Optionally pass a
         *
         * @return \stdClass|null The breadcrumb for the current page.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\UnnamedRouteException if the current route doesn't have an associated name.
         * @throws \DaveJamesMiller\Breadcrumbs\Exceptions\InvalidBreadcrumbException if the name is (or any ancestor names are) not registered.
         * @static 
         */ 
        public static function current()
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::current();
        }
        
        /**
         * Set the current route name and parameters to use when calling render() or generate() with no parameters.
         *
         * @param string $name The name of the current page.
         * @param mixed $params The parameters to pass to the closure for the current page.
         * @return void 
         * @static 
         */ 
        public static function setCurrentRoute($name, ...$params)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::setCurrentRoute($name, ...$params);
        }
        
        /**
         * Clear the previously set route name and parameters to use when calling render() or generate() with no parameters.
         * 
         * Next time it will revert to the default behaviour of using the current route from Laravel.
         *
         * @return void 
         * @static 
         */ 
        public static function clearCurrentRoute()
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::clearCurrentRoute();
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \DaveJamesMiller\Breadcrumbs\BreadcrumbsManager::flushMacros();
        }
         
    }
 
}

namespace Collective\Html { 

    class FormFacade {
        
        /**
         * Open up a new HTML form.
         *
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function open($options = [])
        {
            return \Collective\Html\FormBuilder::open($options);
        }
        
        /**
         * Create a new model based form builder.
         *
         * @param mixed $model
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function model($model, $options = [])
        {
            return \Collective\Html\FormBuilder::model($model, $options);
        }
        
        /**
         * Set the model instance on the form builder.
         *
         * @param mixed $model
         * @return void 
         * @static 
         */ 
        public static function setModel($model)
        {
            \Collective\Html\FormBuilder::setModel($model);
        }
        
        /**
         * Get the current model instance on the form builder.
         *
         * @return mixed $model
         * @static 
         */ 
        public static function getModel()
        {
            return \Collective\Html\FormBuilder::getModel();
        }
        
        /**
         * Close the current form.
         *
         * @return string 
         * @static 
         */ 
        public static function close()
        {
            return \Collective\Html\FormBuilder::close();
        }
        
        /**
         * Generate a hidden field with the current CSRF token.
         *
         * @return string 
         * @static 
         */ 
        public static function token()
        {
            return \Collective\Html\FormBuilder::token();
        }
        
        /**
         * Create a form label element.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @param bool $escape_html
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function label($name, $value = null, $options = [], $escape_html = true)
        {
            return \Collective\Html\FormBuilder::label($name, $value, $options, $escape_html);
        }
        
        /**
         * Create a form input field.
         *
         * @param string $type
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function input($type, $name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::input($type, $name, $value, $options);
        }
        
        /**
         * Create a text input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function text($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::text($name, $value, $options);
        }
        
        /**
         * Create a password input field.
         *
         * @param string $name
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function password($name, $options = [])
        {
            return \Collective\Html\FormBuilder::password($name, $options);
        }
        
        /**
         * Create a range input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function range($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::range($name, $value, $options);
        }
        
        /**
         * Create a hidden input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function hidden($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::hidden($name, $value, $options);
        }
        
        /**
         * Create a search input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function search($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::search($name, $value, $options);
        }
        
        /**
         * Create an e-mail input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function email($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::email($name, $value, $options);
        }
        
        /**
         * Create a tel input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function tel($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::tel($name, $value, $options);
        }
        
        /**
         * Create a number input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function number($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::number($name, $value, $options);
        }
        
        /**
         * Create a date input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function date($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::date($name, $value, $options);
        }
        
        /**
         * Create a datetime input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function datetime($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::datetime($name, $value, $options);
        }
        
        /**
         * Create a datetime-local input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function datetimeLocal($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::datetimeLocal($name, $value, $options);
        }
        
        /**
         * Create a time input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function time($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::time($name, $value, $options);
        }
        
        /**
         * Create a url input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function url($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::url($name, $value, $options);
        }
        
        /**
         * Create a week input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function week($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::week($name, $value, $options);
        }
        
        /**
         * Create a file input field.
         *
         * @param string $name
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function file($name, $options = [])
        {
            return \Collective\Html\FormBuilder::file($name, $options);
        }
        
        /**
         * Create a textarea input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function textarea($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::textarea($name, $value, $options);
        }
        
        /**
         * Create a select box field.
         *
         * @param string $name
         * @param array $list
         * @param string|bool $selected
         * @param array $selectAttributes
         * @param array $optionsAttributes
         * @param array $optgroupsAttributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function select($name, $list = [], $selected = null, $selectAttributes = [], $optionsAttributes = [], $optgroupsAttributes = [])
        {
            return \Collective\Html\FormBuilder::select($name, $list, $selected, $selectAttributes, $optionsAttributes, $optgroupsAttributes);
        }
        
        /**
         * Create a select range field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function selectRange($name, $begin, $end, $selected = null, $options = [])
        {
            return \Collective\Html\FormBuilder::selectRange($name, $begin, $end, $selected, $options);
        }
        
        /**
         * Create a select year field.
         *
         * @param string $name
         * @param string $begin
         * @param string $end
         * @param string $selected
         * @param array $options
         * @return mixed 
         * @static 
         */ 
        public static function selectYear()
        {
            return \Collective\Html\FormBuilder::selectYear();
        }
        
        /**
         * Create a select month field.
         *
         * @param string $name
         * @param string $selected
         * @param array $options
         * @param string $format
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function selectMonth($name, $selected = null, $options = [], $format = '%B')
        {
            return \Collective\Html\FormBuilder::selectMonth($name, $selected, $options, $format);
        }
        
        /**
         * Get the select option for the given value.
         *
         * @param string $display
         * @param string $value
         * @param string $selected
         * @param array $attributes
         * @param array $optgroupAttributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function getSelectOption($display, $value, $selected, $attributes = [], $optgroupAttributes = [])
        {
            return \Collective\Html\FormBuilder::getSelectOption($display, $value, $selected, $attributes, $optgroupAttributes);
        }
        
        /**
         * Create a checkbox input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function checkbox($name, $value = 1, $checked = null, $options = [])
        {
            return \Collective\Html\FormBuilder::checkbox($name, $value, $checked, $options);
        }
        
        /**
         * Create a radio button input field.
         *
         * @param string $name
         * @param mixed $value
         * @param bool $checked
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function radio($name, $value = null, $checked = null, $options = [])
        {
            return \Collective\Html\FormBuilder::radio($name, $value, $checked, $options);
        }
        
        /**
         * Create a HTML reset input element.
         *
         * @param string $value
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function reset($value, $attributes = [])
        {
            return \Collective\Html\FormBuilder::reset($value, $attributes);
        }
        
        /**
         * Create a HTML image input element.
         *
         * @param string $url
         * @param string $name
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function image($url, $name = null, $attributes = [])
        {
            return \Collective\Html\FormBuilder::image($url, $name, $attributes);
        }
        
        /**
         * Create a month input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function month($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::month($name, $value, $options);
        }
        
        /**
         * Create a color input field.
         *
         * @param string $name
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function color($name, $value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::color($name, $value, $options);
        }
        
        /**
         * Create a submit button element.
         *
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function submit($value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::submit($value, $options);
        }
        
        /**
         * Create a button element.
         *
         * @param string $value
         * @param array $options
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function button($value = null, $options = [])
        {
            return \Collective\Html\FormBuilder::button($value, $options);
        }
        
        /**
         * Create a datalist box field.
         *
         * @param string $id
         * @param array $list
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function datalist($id, $list = [])
        {
            return \Collective\Html\FormBuilder::datalist($id, $list);
        }
        
        /**
         * Get the ID attribute for a field name.
         *
         * @param string $name
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function getIdAttribute($name, $attributes)
        {
            return \Collective\Html\FormBuilder::getIdAttribute($name, $attributes);
        }
        
        /**
         * Get the value that should be assigned to the field.
         *
         * @param string $name
         * @param string $value
         * @return mixed 
         * @static 
         */ 
        public static function getValueAttribute($name, $value = null)
        {
            return \Collective\Html\FormBuilder::getValueAttribute($name, $value);
        }
        
        /**
         * Take Request in fill process
         *
         * @param bool $consider
         * @static 
         */ 
        public static function considerRequest($consider = true)
        {
            return \Collective\Html\FormBuilder::considerRequest($consider);
        }
        
        /**
         * Get a value from the session's old input.
         *
         * @param string $name
         * @return mixed 
         * @static 
         */ 
        public static function old($name)
        {
            return \Collective\Html\FormBuilder::old($name);
        }
        
        /**
         * Determine if the old input is empty.
         *
         * @return bool 
         * @static 
         */ 
        public static function oldInputIsEmpty()
        {
            return \Collective\Html\FormBuilder::oldInputIsEmpty();
        }
        
        /**
         * Get the session store implementation.
         *
         * @return \Illuminate\Contracts\Session\Session $session
         * @static 
         */ 
        public static function getSessionStore()
        {
            return \Collective\Html\FormBuilder::getSessionStore();
        }
        
        /**
         * Set the session store implementation.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @return \Collective\Html\FormBuilder 
         * @static 
         */ 
        public static function setSessionStore($session)
        {
            return \Collective\Html\FormBuilder::setSessionStore($session);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Collective\Html\FormBuilder::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Collective\Html\FormBuilder::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Collective\Html\FormBuilder::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Collective\Html\FormBuilder::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Collective\Html\FormBuilder::macroCall($method, $parameters);
        }
        
        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void 
         * @static 
         */ 
        public static function component($name, $view, $signature)
        {
            \Collective\Html\FormBuilder::component($name, $view, $signature);
        }
        
        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool 
         * @static 
         */ 
        public static function hasComponent($name)
        {
            return \Collective\Html\FormBuilder::hasComponent($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function componentCall($method, $parameters)
        {
            return \Collective\Html\FormBuilder::componentCall($method, $parameters);
        }
         
    }

    class HtmlFacade {
        
        /**
         * Convert an HTML string to entities.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function entities($value)
        {
            return \Collective\Html\HtmlBuilder::entities($value);
        }
        
        /**
         * Convert entities to HTML characters.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function decode($value)
        {
            return \Collective\Html\HtmlBuilder::decode($value);
        }
        
        /**
         * Generate a link to a JavaScript file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function script($url, $attributes = [], $secure = null)
        {
            return \Collective\Html\HtmlBuilder::script($url, $attributes, $secure);
        }
        
        /**
         * Generate a link to a CSS file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function style($url, $attributes = [], $secure = null)
        {
            return \Collective\Html\HtmlBuilder::style($url, $attributes, $secure);
        }
        
        /**
         * Generate an HTML image element.
         *
         * @param string $url
         * @param string $alt
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function image($url, $alt = null, $attributes = [], $secure = null)
        {
            return \Collective\Html\HtmlBuilder::image($url, $alt, $attributes, $secure);
        }
        
        /**
         * Generate a link to a Favicon file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function favicon($url, $attributes = [], $secure = null)
        {
            return \Collective\Html\HtmlBuilder::favicon($url, $attributes, $secure);
        }
        
        /**
         * Generate a HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function link($url, $title = null, $attributes = [], $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::link($url, $title, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTTPS HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function secureLink($url, $title = null, $attributes = [], $escape = true)
        {
            return \Collective\Html\HtmlBuilder::secureLink($url, $title, $attributes, $escape);
        }
        
        /**
         * Generate a HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkAsset($url, $title = null, $attributes = [], $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTTPS HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkSecureAsset($url, $title = null, $attributes = [], $escape = true)
        {
            return \Collective\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes, $escape);
        }
        
        /**
         * Generate a HTML link to a named route.
         *
         * @param string $name
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkRoute($name, $title = null, $parameters = [], $attributes = [], $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTML link to a controller action.
         *
         * @param string $action
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkAction($action, $title = null, $parameters = [], $attributes = [], $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTML link to an email address.
         *
         * @param string $email
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function mailto($email, $title = null, $attributes = [], $escape = true)
        {
            return \Collective\Html\HtmlBuilder::mailto($email, $title, $attributes, $escape);
        }
        
        /**
         * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
         *
         * @param string $email
         * @return string 
         * @static 
         */ 
        public static function email($email)
        {
            return \Collective\Html\HtmlBuilder::email($email);
        }
        
        /**
         * Generates non-breaking space entities based on number supplied.
         *
         * @param int $num
         * @return string 
         * @static 
         */ 
        public static function nbsp($num = 1)
        {
            return \Collective\Html\HtmlBuilder::nbsp($num);
        }
        
        /**
         * Generate an ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string 
         * @static 
         */ 
        public static function ol($list, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::ol($list, $attributes);
        }
        
        /**
         * Generate an un-ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string 
         * @static 
         */ 
        public static function ul($list, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::ul($list, $attributes);
        }
        
        /**
         * Generate a description list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function dl($list, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::dl($list, $attributes);
        }
        
        /**
         * Build an HTML attribute string from an array.
         *
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function attributes($attributes)
        {
            return \Collective\Html\HtmlBuilder::attributes($attributes);
        }
        
        /**
         * Obfuscate a string to prevent spam-bots from sniffing it.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function obfuscate($value)
        {
            return \Collective\Html\HtmlBuilder::obfuscate($value);
        }
        
        /**
         * Generate a meta tag.
         *
         * @param string $name
         * @param string $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function meta($name, $content, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::meta($name, $content, $attributes);
        }
        
        /**
         * Generate an html tag.
         *
         * @param string $tag
         * @param mixed $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function tag($tag, $content, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::tag($tag, $content, $attributes);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Collective\Html\HtmlBuilder::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Collective\Html\HtmlBuilder::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Collective\Html\HtmlBuilder::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Collective\Html\HtmlBuilder::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Collective\Html\HtmlBuilder::macroCall($method, $parameters);
        }
        
        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void 
         * @static 
         */ 
        public static function component($name, $view, $signature)
        {
            \Collective\Html\HtmlBuilder::component($name, $view, $signature);
        }
        
        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool 
         * @static 
         */ 
        public static function hasComponent($name)
        {
            return \Collective\Html\HtmlBuilder::hasComponent($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function componentCall($method, $parameters)
        {
            return \Collective\Html\HtmlBuilder::componentCall($method, $parameters);
        }
         
    }

    class HtmlFacade {
        
        /**
         * Convert an HTML string to entities.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function entities($value)
        {
            return \Collective\Html\HtmlBuilder::entities($value);
        }
        
        /**
         * Convert entities to HTML characters.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function decode($value)
        {
            return \Collective\Html\HtmlBuilder::decode($value);
        }
        
        /**
         * Generate a link to a JavaScript file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function script($url, $attributes = [], $secure = null)
        {
            return \Collective\Html\HtmlBuilder::script($url, $attributes, $secure);
        }
        
        /**
         * Generate a link to a CSS file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function style($url, $attributes = [], $secure = null)
        {
            return \Collective\Html\HtmlBuilder::style($url, $attributes, $secure);
        }
        
        /**
         * Generate an HTML image element.
         *
         * @param string $url
         * @param string $alt
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function image($url, $alt = null, $attributes = [], $secure = null)
        {
            return \Collective\Html\HtmlBuilder::image($url, $alt, $attributes, $secure);
        }
        
        /**
         * Generate a link to a Favicon file.
         *
         * @param string $url
         * @param array $attributes
         * @param bool $secure
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function favicon($url, $attributes = [], $secure = null)
        {
            return \Collective\Html\HtmlBuilder::favicon($url, $attributes, $secure);
        }
        
        /**
         * Generate a HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function link($url, $title = null, $attributes = [], $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::link($url, $title, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTTPS HTML link.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function secureLink($url, $title = null, $attributes = [], $escape = true)
        {
            return \Collective\Html\HtmlBuilder::secureLink($url, $title, $attributes, $escape);
        }
        
        /**
         * Generate a HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkAsset($url, $title = null, $attributes = [], $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::linkAsset($url, $title, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTTPS HTML link to an asset.
         *
         * @param string $url
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkSecureAsset($url, $title = null, $attributes = [], $escape = true)
        {
            return \Collective\Html\HtmlBuilder::linkSecureAsset($url, $title, $attributes, $escape);
        }
        
        /**
         * Generate a HTML link to a named route.
         *
         * @param string $name
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkRoute($name, $title = null, $parameters = [], $attributes = [], $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::linkRoute($name, $title, $parameters, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTML link to a controller action.
         *
         * @param string $action
         * @param string $title
         * @param array $parameters
         * @param array $attributes
         * @param bool $secure
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function linkAction($action, $title = null, $parameters = [], $attributes = [], $secure = null, $escape = true)
        {
            return \Collective\Html\HtmlBuilder::linkAction($action, $title, $parameters, $attributes, $secure, $escape);
        }
        
        /**
         * Generate a HTML link to an email address.
         *
         * @param string $email
         * @param string $title
         * @param array $attributes
         * @param bool $escape
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function mailto($email, $title = null, $attributes = [], $escape = true)
        {
            return \Collective\Html\HtmlBuilder::mailto($email, $title, $attributes, $escape);
        }
        
        /**
         * Obfuscate an e-mail address to prevent spam-bots from sniffing it.
         *
         * @param string $email
         * @return string 
         * @static 
         */ 
        public static function email($email)
        {
            return \Collective\Html\HtmlBuilder::email($email);
        }
        
        /**
         * Generates non-breaking space entities based on number supplied.
         *
         * @param int $num
         * @return string 
         * @static 
         */ 
        public static function nbsp($num = 1)
        {
            return \Collective\Html\HtmlBuilder::nbsp($num);
        }
        
        /**
         * Generate an ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string 
         * @static 
         */ 
        public static function ol($list, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::ol($list, $attributes);
        }
        
        /**
         * Generate an un-ordered list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString|string 
         * @static 
         */ 
        public static function ul($list, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::ul($list, $attributes);
        }
        
        /**
         * Generate a description list of items.
         *
         * @param array $list
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function dl($list, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::dl($list, $attributes);
        }
        
        /**
         * Build an HTML attribute string from an array.
         *
         * @param array $attributes
         * @return string 
         * @static 
         */ 
        public static function attributes($attributes)
        {
            return \Collective\Html\HtmlBuilder::attributes($attributes);
        }
        
        /**
         * Obfuscate a string to prevent spam-bots from sniffing it.
         *
         * @param string $value
         * @return string 
         * @static 
         */ 
        public static function obfuscate($value)
        {
            return \Collective\Html\HtmlBuilder::obfuscate($value);
        }
        
        /**
         * Generate a meta tag.
         *
         * @param string $name
         * @param string $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function meta($name, $content, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::meta($name, $content, $attributes);
        }
        
        /**
         * Generate an html tag.
         *
         * @param string $tag
         * @param mixed $content
         * @param array $attributes
         * @return \Illuminate\Support\HtmlString 
         * @static 
         */ 
        public static function tag($tag, $content, $attributes = [])
        {
            return \Collective\Html\HtmlBuilder::tag($tag, $content, $attributes);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            \Collective\Html\HtmlBuilder::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            \Collective\Html\HtmlBuilder::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            return \Collective\Html\HtmlBuilder::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            \Collective\Html\HtmlBuilder::flushMacros();
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function macroCall($method, $parameters)
        {
            return \Collective\Html\HtmlBuilder::macroCall($method, $parameters);
        }
        
        /**
         * Register a custom component.
         *
         * @param $name
         * @param $view
         * @param array $signature
         * @return void 
         * @static 
         */ 
        public static function component($name, $view, $signature)
        {
            \Collective\Html\HtmlBuilder::component($name, $view, $signature);
        }
        
        /**
         * Check if a component is registered.
         *
         * @param $name
         * @return bool 
         * @static 
         */ 
        public static function hasComponent($name)
        {
            return \Collective\Html\HtmlBuilder::hasComponent($name);
        }
        
        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return \Illuminate\Contracts\View\View|mixed 
         * @throws \BadMethodCallException
         * @static 
         */ 
        public static function componentCall($method, $parameters)
        {
            return \Collective\Html\HtmlBuilder::componentCall($method, $parameters);
        }
         
    }
 
}

namespace Spatie\LaravelIgnition\Facades { 

    class Flare {
        
        /**
         * 
         *
         * @static 
         */ 
        public static function make($apiKey = null, $contextDetector = null)
        {
            return \Spatie\FlareClient\Flare::make($apiKey, $contextDetector);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function setApiToken($apiToken)
        {
            return \Spatie\FlareClient\Flare::setApiToken($apiToken);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function apiTokenSet()
        {
            return \Spatie\FlareClient\Flare::apiTokenSet();
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function setBaseUrl($baseUrl)
        {
            return \Spatie\FlareClient\Flare::setBaseUrl($baseUrl);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function setStage($stage)
        {
            return \Spatie\FlareClient\Flare::setStage($stage);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function sendReportsImmediately()
        {
            return \Spatie\FlareClient\Flare::sendReportsImmediately();
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function determineVersionUsing($determineVersionCallable)
        {
            return \Spatie\FlareClient\Flare::determineVersionUsing($determineVersionCallable);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function reportErrorLevels($reportErrorLevels)
        {
            return \Spatie\FlareClient\Flare::reportErrorLevels($reportErrorLevels);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
            return \Spatie\FlareClient\Flare::filterExceptionsUsing($filterExceptionsCallable);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function filterReportsUsing($filterReportsCallable)
        {
            return \Spatie\FlareClient\Flare::filterReportsUsing($filterReportsCallable);
        }
        
        /**
         * 
         *
         * @param array<class-string<ArgumentReducer>|ArgumentReducer>|\Spatie\Backtrace\Arguments\ArgumentReducers|null $argumentReducers
         * @static 
         */ 
        public static function argumentReducers($argumentReducers)
        {
            return \Spatie\FlareClient\Flare::argumentReducers($argumentReducers);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function withStackFrameArguments($withStackFrameArguments = true)
        {
            return \Spatie\FlareClient\Flare::withStackFrameArguments($withStackFrameArguments);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function version()
        {
            return \Spatie\FlareClient\Flare::version();
        }
        
        /**
         * 
         *
         * @return array<int, FlareMiddleware|class-string<FlareMiddleware>> 
         * @static 
         */ 
        public static function getMiddleware()
        {
            return \Spatie\FlareClient\Flare::getMiddleware();
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function setContextProviderDetector($contextDetector)
        {
            return \Spatie\FlareClient\Flare::setContextProviderDetector($contextDetector);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function setContainer($container)
        {
            return \Spatie\FlareClient\Flare::setContainer($container);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function registerFlareHandlers()
        {
            return \Spatie\FlareClient\Flare::registerFlareHandlers();
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function registerExceptionHandler()
        {
            return \Spatie\FlareClient\Flare::registerExceptionHandler();
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function registerErrorHandler()
        {
            return \Spatie\FlareClient\Flare::registerErrorHandler();
        }
        
        /**
         * 
         *
         * @param \Spatie\FlareClient\FlareMiddleware\FlareMiddleware|array<FlareMiddleware>|\Spatie\FlareClient\class-string<FlareMiddleware>|callable $middleware
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function registerMiddleware($middleware)
        {
            return \Spatie\FlareClient\Flare::registerMiddleware($middleware);
        }
        
        /**
         * 
         *
         * @return array<int,FlareMiddleware|class-string<FlareMiddleware>> 
         * @static 
         */ 
        public static function getMiddlewares()
        {
            return \Spatie\FlareClient\Flare::getMiddlewares();
        }
        
        /**
         * 
         *
         * @param string $name
         * @param string $messageLevel
         * @param array<int, mixed> $metaData
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
            return \Spatie\FlareClient\Flare::glow($name, $messageLevel, $metaData);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function handleException($throwable)
        {
            return \Spatie\FlareClient\Flare::handleException($throwable);
        }
        
        /**
         * 
         *
         * @return mixed 
         * @static 
         */ 
        public static function handleError($code, $message, $file = '', $line = 0)
        {
            return \Spatie\FlareClient\Flare::handleError($code, $message, $file, $line);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function applicationPath($applicationPath)
        {
            return \Spatie\FlareClient\Flare::applicationPath($applicationPath);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function report($throwable, $callback = null, $report = null)
        {
            return \Spatie\FlareClient\Flare::report($throwable, $callback, $report);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function reportMessage($message, $logLevel, $callback = null)
        {
            return \Spatie\FlareClient\Flare::reportMessage($message, $logLevel, $callback);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function sendTestReport($throwable)
        {
            return \Spatie\FlareClient\Flare::sendTestReport($throwable);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function reset()
        {
            return \Spatie\FlareClient\Flare::reset();
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function anonymizeIp()
        {
            return \Spatie\FlareClient\Flare::anonymizeIp();
        }
        
        /**
         * 
         *
         * @param array<int, string> $fieldNames
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function censorRequestBodyFields($fieldNames)
        {
            return \Spatie\FlareClient\Flare::censorRequestBodyFields($fieldNames);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function createReport($throwable)
        {
            return \Spatie\FlareClient\Flare::createReport($throwable);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function createReportFromMessage($message, $logLevel)
        {
            return \Spatie\FlareClient\Flare::createReportFromMessage($message, $logLevel);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function stage($stage)
        {
            return \Spatie\FlareClient\Flare::stage($stage);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function messageLevel($messageLevel)
        {
            return \Spatie\FlareClient\Flare::messageLevel($messageLevel);
        }
        
        /**
         * 
         *
         * @param string $groupName
         * @param mixed $default
         * @return array<int, mixed> 
         * @static 
         */ 
        public static function getGroup($groupName = 'context', $default = [])
        {
            return \Spatie\FlareClient\Flare::getGroup($groupName, $default);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function context($key, $value)
        {
            return \Spatie\FlareClient\Flare::context($key, $value);
        }
        
        /**
         * 
         *
         * @param string $groupName
         * @param array<string, mixed> $properties
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */ 
        public static function group($groupName, $properties)
        {
            return \Spatie\FlareClient\Flare::group($groupName, $properties);
        }
         
    }
 
}

namespace KodiCMS\Assets\Facades { 

    class Assets {
        
        /**
         * Gets or sets javascript assets.
         *
         * @param bool|string $handle
         * @param string $src Asset source
         * @param array|string $dependency Dependencies
         * @param bool $footer Whether to show in header or footer
         * @return \KodiCMS\Assets\Contracts\AssetElementInterface Setting returns asset array, getting returns asset HTML
         * @static 
         */ 
        public static function addJs($handle = false, $src = null, $dependency = null, $footer = true)
        {
            return \SleepingOwl\Admin\Templates\Assets::addJs($handle, $src, $dependency, $footer);
        }
        
        /**
         * Добавление глобальной переменной.
         *
         * @param string $key
         * @param mixed $value
         * @return self 
         * @static 
         */ 
        public static function putGlobalVar($key, $value)
        {
            return \SleepingOwl\Admin\Templates\Assets::putGlobalVar($key, $value);
        }
        
        /**
         * 
         *
         * @return array 
         * @static 
         */ 
        public static function globalVars()
        {
            return \SleepingOwl\Admin\Templates\Assets::globalVars();
        }
        
        /**
         * 
         *
         * @return string 
         * @static 
         */ 
        public static function render()
        {
            return \SleepingOwl\Admin\Templates\Assets::render();
        }
        
        /**
         * 
         *
         * @return string 
         * @static 
         */ 
        public static function renderGlobalVars()
        {
            return \SleepingOwl\Admin\Templates\Assets::renderGlobalVars();
        }
        
        /**
         * 
         *
         * @return \KodiCMS\Assets\PackageManagerInterface 
         * @static 
         */ 
        public static function packageManager()
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::packageManager();
        }
        
        /**
         * 
         *
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function clear()
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::clear();
        }
        
        /**
         * Group wrapper.
         *
         * @param string $group Group name
         * @param string $handle Asset name
         * @param string $content Asset content
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function group($group, $handle = null, $content = null)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::group($group, $handle, $content);
        }
        
        /**
         * Get a single group asset.
         *
         * @param string $group Group name
         * @param string $handle Asset name
         * @return string|null Asset content
         * @static 
         */ 
        public static function getGroup($group, $handle)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::getGroup($group, $handle);
        }
        
        /**
         * Remove a group asset, all of a groups assets, or all group assets.
         *
         * @param string $group Group name
         * @param string $handle Asset name
         * @return mixed Empty array or void
         * @static 
         */ 
        public static function removeGroup($group = null, $handle = null)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::removeGroup($group, $handle);
        }
        
        /**
         * Get all of a groups assets, sorted by dependencies.
         *
         * @param string $group Group name
         * @return string Assets content
         * @static 
         */ 
        public static function renderGroup($group)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::renderGroup($group);
        }
        
        /**
         * 
         *
         * @deprecated 
         * @param string $group Group name
         * @return string|void 
         * @static 
         */ 
        public static function allGroup($group)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::allGroup($group);
        }
        
        /**
         * 
         *
         * @param string|array $key
         * @param mixed $value
         * @throws Exception
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function putVars($key, $value = null)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::putVars($key, $value);
        }
        
        /**
         * Remove a javascript vars.
         *
         * @return mixed Empty array or void
         * @static 
         */ 
        public static function removeVars()
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::removeVars();
        }
        
        /**
         * 
         *
         * @return string 
         * @static 
         */ 
        public static function renderVars()
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::renderVars();
        }
        
        /**
         * 
         *
         * @param string|array $names
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function loadPackage($names)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::loadPackage($names);
        }
        
        /**
         * 
         *
         * @return array 
         * @static 
         */ 
        public static function loadedPackages()
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::loadedPackages();
        }
        
        /**
         * 
         *
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function removePackages()
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::removePackages();
        }
        
        /**
         * CSS wrapper.
         * 
         * Gets or sets CSS assets
         *
         * @param string $handle Asset name.
         * @param string $src Asset source
         * @param array|string $dependency Dependencies
         * @param array $attributes Attributes for the <link /> element
         * @return \KodiCMS\Assets\Contracts\AssetElementInterface Setting returns asset array, getting returns asset HTML
         * @static 
         */ 
        public static function addCss($handle = null, $src = null, $dependency = null, $attributes = [])
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::addCss($handle, $src, $dependency, $attributes);
        }
        
        /**
         * 
         *
         * @param string $filename [default: css/all.css]
         * @param null|string $dependency
         * @param array|null $attributes
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function addCssElixir($filename = 'css/all.css', $dependency = null, $attributes = [])
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::addCssElixir($filename, $dependency, $attributes);
        }
        
        /**
         * 
         *
         * @param string $filename [default: css/all.css]
         * @param null|string $dependency
         * @param array|null $attributes
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function addCssMix($filename = 'css/all.css', $dependency = null, $attributes = [])
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::addCssMix($filename, $dependency, $attributes);
        }
        
        /**
         * Remove a CSS asset, or all.
         *
         * @param string|null $handle Asset name, or `NULL` to remove all
         * @return mixed Empty array or void
         * @static 
         */ 
        public static function removeCss($handle = null)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::removeCss($handle);
        }
        
        /**
         * Get a single CSS asset.
         *
         * @param string $handle Asset name
         * @return string Asset HTML
         * @static 
         */ 
        public static function getCss($handle)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::getCss($handle);
        }
        
        /**
         * Get all CSS assets, sorted by dependencies.
         *
         * @return string Asset HTML
         * @static 
         */ 
        public static function renderStyles()
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::renderStyles();
        }
        
        /**
         * 
         *
         * @deprecated 
         * @return string 
         * @static 
         */ 
        public static function getCssList()
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::getCssList();
        }
        
        /**
         * 
         *
         * @param string $filename [default: js/app.js]
         * @param null|string $dependency
         * @param bool $footer
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function addJsElixir($filename = 'js/app.js', $dependency = null, $footer = false)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::addJsElixir($filename, $dependency, $footer);
        }
        
        /**
         * 
         *
         * @param string $filename [default: js/app.js]
         * @param null|string $dependency
         * @param bool $footer
         * @return \SleepingOwl\Admin\Templates\Assets 
         * @static 
         */ 
        public static function addJsMix($filename = 'js/app.js', $dependency = null, $footer = false)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::addJsMix($filename, $dependency, $footer);
        }
        
        /**
         * Get a single javascript asset.
         *
         * @param string $handle Asset name
         * @return string Asset HTML
         * @static 
         */ 
        public static function getJs($handle)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::getJs($handle);
        }
        
        /**
         * Remove a javascript asset, or all.
         *
         * @param string|null $handle Remove all if `NULL`, section if `TRUE` or `FALSE`, asset if `string`
         * @return mixed Empty array or void
         * @static 
         */ 
        public static function removeJs($handle = null)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::removeJs($handle);
        }
        
        /**
         * 
         *
         * @deprecated 
         * @param bool $footer
         * @return string 
         * @static 
         */ 
        public static function getJsList($footer = false)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::getJsList($footer);
        }
        
        /**
         * Get all javascript assets of section (header or footer).
         *
         * @param bool $footer FALSE for head, TRUE for footer
         * @return string Asset HTML
         * @static 
         */ 
        public static function renderScripts($footer = false)
        {
            //Method inherited from \KodiCMS\Assets\Assets            
            return \SleepingOwl\Admin\Templates\Assets::renderScripts($footer);
        }
         
    }

    class PackageManager {
        
        /**
         * 
         *
         * @param string|\KodiCMS\Assets\Contracts\PackageInterface $package
         * @return \KodiCMS\Assets\Package 
         * @static 
         */ 
        public static function add($package)
        {
            return \KodiCMS\Assets\PackageManager::add($package);
        }
        
        /**
         * 
         *
         * @param string $name
         * @return \KodiCMS\Assets\Contracts\PackageInterface|null 
         * @static 
         */ 
        public static function load($name)
        {
            return \KodiCMS\Assets\PackageManager::load($name);
        }
        
        /**
         * Create a collection with the given range.
         *
         * @param int $from
         * @param int $to
         * @return \Illuminate\Support\static<int, int> 
         * @static 
         */ 
        public static function range($from, $to)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::range($from, $to);
        }
        
        /**
         * Get all of the items in the collection.
         *
         * @return array<TKey, TValue> 
         * @static 
         */ 
        public static function all()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::all();
        }
        
        /**
         * Get a lazy collection for the items in this collection.
         *
         * @return \Illuminate\Support\LazyCollection<TKey, TValue> 
         * @static 
         */ 
        public static function lazy()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::lazy();
        }
        
        /**
         * Get the average value of a given key.
         *
         * @param \Illuminate\Support\(callable(TValue):  float|int)|string|null  $callback
         * @return float|int|null 
         * @static 
         */ 
        public static function avg($callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::avg($callback);
        }
        
        /**
         * Get the median of a given key.
         *
         * @param string|array<array-key, string>|null $key
         * @return float|int|null 
         * @static 
         */ 
        public static function median($key = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::median($key);
        }
        
        /**
         * Get the mode of a given key.
         *
         * @param string|array<array-key, string>|null $key
         * @return array<int, float|int>|null 
         * @static 
         */ 
        public static function mode($key = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::mode($key);
        }
        
        /**
         * Collapse the collection of items into a single array.
         *
         * @return \Illuminate\Support\static<int, mixed> 
         * @static 
         */ 
        public static function collapse()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::collapse();
        }
        
        /**
         * Determine if an item exists in the collection.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|TValue|string  $key
         * @param mixed $operator
         * @param mixed $value
         * @return bool 
         * @static 
         */ 
        public static function contains($key, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::contains($key, $operator, $value);
        }
        
        /**
         * Determine if an item exists, using strict comparison.
         *
         * @param \Illuminate\Support\(callable(TValue):  bool)|TValue|array-key  $key
         * @param \Illuminate\Support\TValue|null $value
         * @return bool 
         * @static 
         */ 
        public static function containsStrict($key, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::containsStrict($key, $value);
        }
        
        /**
         * Determine if an item is not contained in the collection.
         *
         * @param mixed $key
         * @param mixed $operator
         * @param mixed $value
         * @return bool 
         * @static 
         */ 
        public static function doesntContain($key, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::doesntContain($key, $operator, $value);
        }
        
        /**
         * Cross join with the given lists, returning all possible permutations.
         *
         * @template TCrossJoinKey
         * @template TCrossJoinValue
         * @param \Illuminate\Contracts\Support\Arrayable<TCrossJoinKey, TCrossJoinValue>|\Illuminate\Support\iterable<TCrossJoinKey,  TCrossJoinValue>  ...$lists
         * @return \Illuminate\Support\static<int, array<int, TValue|TCrossJoinValue>> 
         * @static 
         */ 
        public static function crossJoin(...$lists)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::crossJoin(...$lists);
        }
        
        /**
         * Get the items in the collection that are not present in the given items.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<array-key, TValue>|\Illuminate\Support\iterable<array-key,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function diff($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::diff($items);
        }
        
        /**
         * Get the items in the collection that are not present in the given items, using the callback.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<array-key, TValue>|\Illuminate\Support\iterable<array-key,  TValue>  $items
         * @param \Illuminate\Support\callable(TValue,  TValue): int  $callback
         * @return static 
         * @static 
         */ 
        public static function diffUsing($items, $callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::diffUsing($items, $callback);
        }
        
        /**
         * Get the items in the collection whose keys and values are not present in the given items.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function diffAssoc($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::diffAssoc($items);
        }
        
        /**
         * Get the items in the collection whose keys and values are not present in the given items, using the callback.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @param \Illuminate\Support\callable(TKey,  TKey): int  $callback
         * @return static 
         * @static 
         */ 
        public static function diffAssocUsing($items, $callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::diffAssocUsing($items, $callback);
        }
        
        /**
         * Get the items in the collection whose keys are not present in the given items.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function diffKeys($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::diffKeys($items);
        }
        
        /**
         * Get the items in the collection whose keys are not present in the given items, using the callback.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @param \Illuminate\Support\callable(TKey,  TKey): int  $callback
         * @return static 
         * @static 
         */ 
        public static function diffKeysUsing($items, $callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::diffKeysUsing($items, $callback);
        }
        
        /**
         * Retrieve duplicate items from the collection.
         *
         * @param \Illuminate\Support\(callable(TValue):  bool)|string|null  $callback
         * @param bool $strict
         * @return static 
         * @static 
         */ 
        public static function duplicates($callback = null, $strict = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::duplicates($callback, $strict);
        }
        
        /**
         * Retrieve duplicate items from the collection using strict comparison.
         *
         * @param \Illuminate\Support\(callable(TValue):  bool)|string|null  $callback
         * @return static 
         * @static 
         */ 
        public static function duplicatesStrict($callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::duplicatesStrict($callback);
        }
        
        /**
         * Get all items except for those with the specified keys.
         *
         * @param \Illuminate\Support\Enumerable<array-key, TKey>|\Illuminate\Support\array<array-key,  TKey>|string  $keys
         * @return static 
         * @static 
         */ 
        public static function except($keys)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::except($keys);
        }
        
        /**
         * Run a filter over each of the items.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|null  $callback
         * @return static 
         * @static 
         */ 
        public static function filter($callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::filter($callback);
        }
        
        /**
         * Get the first item from the collection passing the given truth test.
         *
         * @template TFirstDefault
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|null  $callback
         * @param \Illuminate\Support\TFirstDefault|\Illuminate\Support\(\Closure():  TFirstDefault)  $default
         * @return \Illuminate\Support\TValue|\Illuminate\Support\TFirstDefault 
         * @static 
         */ 
        public static function first($callback = null, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::first($callback, $default);
        }
        
        /**
         * Get a flattened array of the items in the collection.
         *
         * @param int $depth
         * @return \Illuminate\Support\static<int, mixed> 
         * @static 
         */ 
        public static function flatten($depth = INF)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::flatten($depth);
        }
        
        /**
         * Flip the items in the collection.
         *
         * @return \Illuminate\Support\static<TValue, TKey> 
         * @static 
         */ 
        public static function flip()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::flip();
        }
        
        /**
         * Remove an item from the collection by key.
         * 
         * \Illuminate\Contracts\Support\Arrayable<array-key, TValue>|iterable<array-key, TKey>|TKey  $keys
         *
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function forget($keys)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::forget($keys);
        }
        
        /**
         * Get an item from the collection by key.
         *
         * @template TGetDefault
         * @param \Illuminate\Support\TKey $key
         * @param \Illuminate\Support\TGetDefault|\Illuminate\Support\(\Closure():  TGetDefault)  $default
         * @return \Illuminate\Support\TValue|\Illuminate\Support\TGetDefault 
         * @static 
         */ 
        public static function get($key, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::get($key, $default);
        }
        
        /**
         * Get an item from the collection by key or add it to collection if it does not exist.
         *
         * @template TGetOrPutValue
         * @param mixed $key
         * @param \Illuminate\Support\TGetOrPutValue|\Illuminate\Support\(\Closure():  TGetOrPutValue)  $value
         * @return \Illuminate\Support\TValue|\Illuminate\Support\TGetOrPutValue 
         * @static 
         */ 
        public static function getOrPut($key, $value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::getOrPut($key, $value);
        }
        
        /**
         * Group an associative array by a field or using a callback.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): array-key)|array|string  $groupBy
         * @param bool $preserveKeys
         * @return \Illuminate\Support\static<array-key, static<array-key, TValue>> 
         * @static 
         */ 
        public static function groupBy($groupBy, $preserveKeys = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::groupBy($groupBy, $preserveKeys);
        }
        
        /**
         * Key an associative array by a field or using a callback.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): array-key)|array|string  $keyBy
         * @return \Illuminate\Support\static<array-key, TValue> 
         * @static 
         */ 
        public static function keyBy($keyBy)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::keyBy($keyBy);
        }
        
        /**
         * Determine if an item exists in the collection by key.
         *
         * @param \Illuminate\Support\TKey|array<array-key, TKey> $key
         * @return bool 
         * @static 
         */ 
        public static function has($key)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::has($key);
        }
        
        /**
         * Determine if any of the keys exist in the collection.
         *
         * @param mixed $key
         * @return bool 
         * @static 
         */ 
        public static function hasAny($key)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::hasAny($key);
        }
        
        /**
         * Concatenate values of a given key as a string.
         *
         * @param callable|string $value
         * @param string|null $glue
         * @return string 
         * @static 
         */ 
        public static function implode($value, $glue = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::implode($value, $glue);
        }
        
        /**
         * Intersect the collection with the given items.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function intersect($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::intersect($items);
        }
        
        /**
         * Intersect the collection with the given items, using the callback.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<array-key, TValue>|\Illuminate\Support\iterable<array-key,  TValue>  $items
         * @param \Illuminate\Support\callable(TValue,  TValue): int  $callback
         * @return static 
         * @static 
         */ 
        public static function intersectUsing($items, $callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::intersectUsing($items, $callback);
        }
        
        /**
         * Intersect the collection with the given items with additional index check.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function intersectAssoc($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::intersectAssoc($items);
        }
        
        /**
         * Intersect the collection with the given items with additional index check, using the callback.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<array-key, TValue>|\Illuminate\Support\iterable<array-key,  TValue>  $items
         * @param \Illuminate\Support\callable(TValue,  TValue): int  $callback
         * @return static 
         * @static 
         */ 
        public static function intersectAssocUsing($items, $callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::intersectAssocUsing($items, $callback);
        }
        
        /**
         * Intersect the collection with the given items by key.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function intersectByKeys($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::intersectByKeys($items);
        }
        
        /**
         * Determine if the collection is empty or not.
         *
         * @return bool 
         * @static 
         */ 
        public static function isEmpty()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::isEmpty();
        }
        
        /**
         * Determine if the collection contains a single item.
         *
         * @return bool 
         * @static 
         */ 
        public static function containsOneItem()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::containsOneItem();
        }
        
        /**
         * Join all items from the collection using a string. The final items can use a separate glue string.
         *
         * @param string $glue
         * @param string $finalGlue
         * @return string 
         * @static 
         */ 
        public static function join($glue, $finalGlue = '')
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::join($glue, $finalGlue);
        }
        
        /**
         * Get the keys of the collection items.
         *
         * @return \Illuminate\Support\static<int, TKey> 
         * @static 
         */ 
        public static function keys()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::keys();
        }
        
        /**
         * Get the last item from the collection.
         *
         * @template TLastDefault
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|null  $callback
         * @param \Illuminate\Support\TLastDefault|\Illuminate\Support\(\Closure():  TLastDefault)  $default
         * @return \Illuminate\Support\TValue|\Illuminate\Support\TLastDefault 
         * @static 
         */ 
        public static function last($callback = null, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::last($callback, $default);
        }
        
        /**
         * Get the values of a given key.
         *
         * @param string|int|array<array-key, string> $value
         * @param string|null $key
         * @return \Illuminate\Support\static<array-key, mixed> 
         * @static 
         */ 
        public static function pluck($value, $key = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::pluck($value, $key);
        }
        
        /**
         * Run a map over each of the items.
         *
         * @template TMapValue
         * @param \Illuminate\Support\callable(TValue,  TKey): TMapValue  $callback
         * @return \Illuminate\Support\static<TKey, TMapValue> 
         * @static 
         */ 
        public static function map($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::map($callback);
        }
        
        /**
         * Run a dictionary map over the items.
         * 
         * The callback should return an associative array with a single key/value pair.
         *
         * @template TMapToDictionaryKey of array-key
         * @template TMapToDictionaryValue
         * @param \Illuminate\Support\callable(TValue,  TKey): array<TMapToDictionaryKey, TMapToDictionaryValue>  $callback
         * @return \Illuminate\Support\static<TMapToDictionaryKey, array<int, TMapToDictionaryValue>> 
         * @static 
         */ 
        public static function mapToDictionary($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::mapToDictionary($callback);
        }
        
        /**
         * Run an associative map over each of the items.
         * 
         * The callback should return an associative array with a single key/value pair.
         *
         * @template TMapWithKeysKey of array-key
         * @template TMapWithKeysValue
         * @param \Illuminate\Support\callable(TValue,  TKey): array<TMapWithKeysKey, TMapWithKeysValue>  $callback
         * @return \Illuminate\Support\static<TMapWithKeysKey, TMapWithKeysValue> 
         * @static 
         */ 
        public static function mapWithKeys($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::mapWithKeys($callback);
        }
        
        /**
         * Merge the collection with the given items.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function merge($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::merge($items);
        }
        
        /**
         * Recursively merge the collection with the given items.
         *
         * @template TMergeRecursiveValue
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TMergeRecursiveValue>|\Illuminate\Support\iterable<TKey,  TMergeRecursiveValue>  $items
         * @return \Illuminate\Support\static<TKey, TValue|TMergeRecursiveValue> 
         * @static 
         */ 
        public static function mergeRecursive($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::mergeRecursive($items);
        }
        
        /**
         * Create a collection by using this collection for keys and another for its values.
         *
         * @template TCombineValue
         * @param \Illuminate\Contracts\Support\Arrayable<array-key, TCombineValue>|\Illuminate\Support\iterable<array-key,  TCombineValue>  $values
         * @return \Illuminate\Support\static<TValue, TCombineValue> 
         * @static 
         */ 
        public static function combine($values)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::combine($values);
        }
        
        /**
         * Union the collection with the given items.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function union($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::union($items);
        }
        
        /**
         * Create a new collection consisting of every n-th element.
         *
         * @param int $step
         * @param int $offset
         * @return static 
         * @static 
         */ 
        public static function nth($step, $offset = 0)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::nth($step, $offset);
        }
        
        /**
         * Get the items with the specified keys.
         *
         * @param \Illuminate\Support\Enumerable<array-key, TKey>|\Illuminate\Support\array<array-key,  TKey>|string|null  $keys
         * @return static 
         * @static 
         */ 
        public static function only($keys)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::only($keys);
        }
        
        /**
         * Get and remove the last N items from the collection.
         *
         * @param int $count
         * @return \Illuminate\Support\static<int, TValue>|\Illuminate\Support\TValue|null 
         * @static 
         */ 
        public static function pop($count = 1)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::pop($count);
        }
        
        /**
         * Push an item onto the beginning of the collection.
         *
         * @param \Illuminate\Support\TValue $value
         * @param \Illuminate\Support\TKey $key
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function prepend($value, $key = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::prepend($value, $key);
        }
        
        /**
         * Push one or more items onto the end of the collection.
         *
         * @param \Illuminate\Support\TValue $values
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function push(...$values)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::push(...$values);
        }
        
        /**
         * Push all of the given items onto the collection.
         *
         * @param \Illuminate\Support\iterable<array-key, TValue> $source
         * @return static 
         * @static 
         */ 
        public static function concat($source)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::concat($source);
        }
        
        /**
         * Get and remove an item from the collection.
         *
         * @template TPullDefault
         * @param \Illuminate\Support\TKey $key
         * @param \Illuminate\Support\TPullDefault|\Illuminate\Support\(\Closure():  TPullDefault)  $default
         * @return \Illuminate\Support\TValue|\Illuminate\Support\TPullDefault 
         * @static 
         */ 
        public static function pull($key, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::pull($key, $default);
        }
        
        /**
         * Put an item in the collection by key.
         *
         * @param \Illuminate\Support\TKey $key
         * @param \Illuminate\Support\TValue $value
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function put($key, $value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::put($key, $value);
        }
        
        /**
         * Get one or a specified number of items randomly from the collection.
         *
         * @param \Illuminate\Support\(callable(self<TKey, TValue>):  int)|int|null  $number
         * @param bool $preserveKeys
         * @return \Illuminate\Support\static<int, TValue>|\Illuminate\Support\TValue 
         * @throws \InvalidArgumentException
         * @static 
         */ 
        public static function random($number = null, $preserveKeys = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::random($number, $preserveKeys);
        }
        
        /**
         * Replace the collection items with the given items.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function replace($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::replace($items);
        }
        
        /**
         * Recursively replace the collection items with the given items.
         *
         * @param \Illuminate\Contracts\Support\Arrayable<TKey, TValue>|\Illuminate\Support\iterable<TKey,  TValue>  $items
         * @return static 
         * @static 
         */ 
        public static function replaceRecursive($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::replaceRecursive($items);
        }
        
        /**
         * Reverse items order.
         *
         * @return static 
         * @static 
         */ 
        public static function reverse()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::reverse();
        }
        
        /**
         * Search the collection for a given value and return the corresponding key if successful.
         *
         * @param \Illuminate\Support\TValue|\Illuminate\Support\(callable(TValue,TKey):  bool)  $value
         * @param bool $strict
         * @return \Illuminate\Support\TKey|bool 
         * @static 
         */ 
        public static function search($value, $strict = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::search($value, $strict);
        }
        
        /**
         * Get and remove the first N items from the collection.
         *
         * @param int $count
         * @return \Illuminate\Support\static<int, TValue>|\Illuminate\Support\TValue|null 
         * @static 
         */ 
        public static function shift($count = 1)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::shift($count);
        }
        
        /**
         * Shuffle the items in the collection.
         *
         * @param int|null $seed
         * @return static 
         * @static 
         */ 
        public static function shuffle($seed = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::shuffle($seed);
        }
        
        /**
         * Create chunks representing a "sliding window" view of the items in the collection.
         *
         * @param int $size
         * @param int $step
         * @return \Illuminate\Support\static<int, static> 
         * @static 
         */ 
        public static function sliding($size = 2, $step = 1)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sliding($size, $step);
        }
        
        /**
         * Skip the first {$count} items.
         *
         * @param int $count
         * @return static 
         * @static 
         */ 
        public static function skip($count)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::skip($count);
        }
        
        /**
         * Skip items in the collection until the given condition is met.
         *
         * @param \Illuminate\Support\TValue|\Illuminate\Support\callable(TValue,TKey):  bool  $value
         * @return static 
         * @static 
         */ 
        public static function skipUntil($value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::skipUntil($value);
        }
        
        /**
         * Skip items in the collection while the given condition is met.
         *
         * @param \Illuminate\Support\TValue|\Illuminate\Support\callable(TValue,TKey):  bool  $value
         * @return static 
         * @static 
         */ 
        public static function skipWhile($value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::skipWhile($value);
        }
        
        /**
         * Slice the underlying collection array.
         *
         * @param int $offset
         * @param int|null $length
         * @return static 
         * @static 
         */ 
        public static function slice($offset, $length = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::slice($offset, $length);
        }
        
        /**
         * Split a collection into a certain number of groups.
         *
         * @param int $numberOfGroups
         * @return \Illuminate\Support\static<int, static> 
         * @static 
         */ 
        public static function split($numberOfGroups)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::split($numberOfGroups);
        }
        
        /**
         * Split a collection into a certain number of groups, and fill the first groups completely.
         *
         * @param int $numberOfGroups
         * @return \Illuminate\Support\static<int, static> 
         * @static 
         */ 
        public static function splitIn($numberOfGroups)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::splitIn($numberOfGroups);
        }
        
        /**
         * Get the first item in the collection, but only if exactly one item exists. Otherwise, throw an exception.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|string  $key
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Support\TValue 
         * @throws \Illuminate\Support\ItemNotFoundException
         * @throws \Illuminate\Support\MultipleItemsFoundException
         * @static 
         */ 
        public static function sole($key = null, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sole($key, $operator, $value);
        }
        
        /**
         * Get the first item in the collection but throw an exception if no matching items exist.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|string  $key
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Support\TValue 
         * @throws \Illuminate\Support\ItemNotFoundException
         * @static 
         */ 
        public static function firstOrFail($key = null, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::firstOrFail($key, $operator, $value);
        }
        
        /**
         * Chunk the collection into chunks of the given size.
         *
         * @param int $size
         * @return \Illuminate\Support\static<int, static> 
         * @static 
         */ 
        public static function chunk($size)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::chunk($size);
        }
        
        /**
         * Chunk the collection into chunks with a callback.
         *
         * @param \Illuminate\Support\callable(TValue,  TKey, static<int, TValue>): bool  $callback
         * @return \Illuminate\Support\static<int, static<int, TValue>> 
         * @static 
         */ 
        public static function chunkWhile($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::chunkWhile($callback);
        }
        
        /**
         * Sort through each item with a callback.
         *
         * @param \Illuminate\Support\(callable(TValue,  TValue): int)|null|int  $callback
         * @return static 
         * @static 
         */ 
        public static function sort($callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sort($callback);
        }
        
        /**
         * Sort items in descending order.
         *
         * @param int $options
         * @return static 
         * @static 
         */ 
        public static function sortDesc($options = 0)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sortDesc($options);
        }
        
        /**
         * Sort the collection using the given callback.
         *
         * @param \Illuminate\Support\array<array-key,  (callable(TValue, TValue): mixed)|(callable(TValue, TKey): mixed)|string|array{string, string}>|(callable(TValue, TKey): mixed)|string  $callback
         * @param int $options
         * @param bool $descending
         * @return static 
         * @static 
         */ 
        public static function sortBy($callback, $options = 0, $descending = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sortBy($callback, $options, $descending);
        }
        
        /**
         * Sort the collection in descending order using the given callback.
         *
         * @param \Illuminate\Support\array<array-key,  (callable(TValue, TValue): mixed)|(callable(TValue, TKey): mixed)|string|array{string, string}>|(callable(TValue, TKey): mixed)|string  $callback
         * @param int $options
         * @return static 
         * @static 
         */ 
        public static function sortByDesc($callback, $options = 0)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sortByDesc($callback, $options);
        }
        
        /**
         * Sort the collection keys.
         *
         * @param int $options
         * @param bool $descending
         * @return static 
         * @static 
         */ 
        public static function sortKeys($options = 0, $descending = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sortKeys($options, $descending);
        }
        
        /**
         * Sort the collection keys in descending order.
         *
         * @param int $options
         * @return static 
         * @static 
         */ 
        public static function sortKeysDesc($options = 0)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sortKeysDesc($options);
        }
        
        /**
         * Sort the collection keys using a callback.
         *
         * @param \Illuminate\Support\callable(TKey,  TKey): int  $callback
         * @return static 
         * @static 
         */ 
        public static function sortKeysUsing($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sortKeysUsing($callback);
        }
        
        /**
         * Splice a portion of the underlying collection array.
         *
         * @param int $offset
         * @param int|null $length
         * @param array<array-key, TValue> $replacement
         * @return static 
         * @static 
         */ 
        public static function splice($offset, $length = null, $replacement = [])
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::splice($offset, $length, $replacement);
        }
        
        /**
         * Take the first or last {$limit} items.
         *
         * @param int $limit
         * @return static 
         * @static 
         */ 
        public static function take($limit)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::take($limit);
        }
        
        /**
         * Take items in the collection until the given condition is met.
         *
         * @param \Illuminate\Support\TValue|\Illuminate\Support\callable(TValue,TKey):  bool  $value
         * @return static 
         * @static 
         */ 
        public static function takeUntil($value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::takeUntil($value);
        }
        
        /**
         * Take items in the collection while the given condition is met.
         *
         * @param \Illuminate\Support\TValue|\Illuminate\Support\callable(TValue,TKey):  bool  $value
         * @return static 
         * @static 
         */ 
        public static function takeWhile($value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::takeWhile($value);
        }
        
        /**
         * Transform each item in the collection using a callback.
         *
         * @param \Illuminate\Support\callable(TValue,  TKey): TValue  $callback
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function transform($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::transform($callback);
        }
        
        /**
         * Flatten a multi-dimensional associative array with dots.
         *
         * @return static 
         * @static 
         */ 
        public static function dot()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::dot();
        }
        
        /**
         * Convert a flatten "dot" notation array into an expanded array.
         *
         * @return static 
         * @static 
         */ 
        public static function undot()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::undot();
        }
        
        /**
         * Return only unique items from the collection array.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): mixed)|string|null  $key
         * @param bool $strict
         * @return static 
         * @static 
         */ 
        public static function unique($key = null, $strict = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::unique($key, $strict);
        }
        
        /**
         * Reset the keys on the underlying array.
         *
         * @return \Illuminate\Support\static<int, TValue> 
         * @static 
         */ 
        public static function values()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::values();
        }
        
        /**
         * Zip the collection together with one or more arrays.
         * 
         * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);
         *      => [[1, 4], [2, 5], [3, 6]]
         *
         * @template TZipValue
         * @param \Illuminate\Contracts\Support\Arrayable<array-key, TZipValue>|\Illuminate\Support\iterable<array-key,  TZipValue>  ...$items
         * @return \Illuminate\Support\static<int, static<int, TValue|TZipValue>> 
         * @static 
         */ 
        public static function zip($items)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::zip($items);
        }
        
        /**
         * Pad collection to the specified length with a value.
         *
         * @template TPadValue
         * @param int $size
         * @param \Illuminate\Support\TPadValue $value
         * @return \Illuminate\Support\static<int, TValue|TPadValue> 
         * @static 
         */ 
        public static function pad($size, $value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::pad($size, $value);
        }
        
        /**
         * Get an iterator for the items.
         *
         * @return \ArrayIterator<TKey, TValue> 
         * @static 
         */ 
        public static function getIterator()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::getIterator();
        }
        
        /**
         * Count the number of items in the collection.
         *
         * @return int 
         * @static 
         */ 
        public static function count()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::count();
        }
        
        /**
         * Count the number of items in the collection by a field or using a callback.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): array-key)|string|null  $countBy
         * @return \Illuminate\Support\static<array-key, int> 
         * @static 
         */ 
        public static function countBy($countBy = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::countBy($countBy);
        }
        
        /**
         * Get a base Support collection instance from this collection.
         *
         * @return \Illuminate\Support\Collection<TKey, TValue> 
         * @static 
         */ 
        public static function toBase()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::toBase();
        }
        
        /**
         * Determine if an item exists at an offset.
         *
         * @param \Illuminate\Support\TKey $key
         * @return bool 
         * @static 
         */ 
        public static function offsetExists($key)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::offsetExists($key);
        }
        
        /**
         * Get an item at a given offset.
         *
         * @param \Illuminate\Support\TKey $key
         * @return \Illuminate\Support\TValue 
         * @static 
         */ 
        public static function offsetGet($key)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::offsetGet($key);
        }
        
        /**
         * Set the item at a given offset.
         *
         * @param \Illuminate\Support\TKey|null $key
         * @param \Illuminate\Support\TValue $value
         * @return void 
         * @static 
         */ 
        public static function offsetSet($key, $value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            \KodiCMS\Assets\PackageManager::offsetSet($key, $value);
        }
        
        /**
         * Unset the item at a given offset.
         *
         * @param \Illuminate\Support\TKey $key
         * @return void 
         * @static 
         */ 
        public static function offsetUnset($key)
        {
            //Method inherited from \Illuminate\Support\Collection            
            \KodiCMS\Assets\PackageManager::offsetUnset($key);
        }
        
        /**
         * Create a new collection instance if the value isn't one already.
         *
         * @template TMakeKey of array-key
         * @template TMakeValue
         * @param \Illuminate\Contracts\Support\Arrayable<TMakeKey, TMakeValue>|\Illuminate\Support\iterable<TMakeKey,  TMakeValue>|null  $items
         * @return \Illuminate\Support\static<TMakeKey, TMakeValue> 
         * @static 
         */ 
        public static function make($items = [])
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::make($items);
        }
        
        /**
         * Wrap the given value in a collection if applicable.
         *
         * @template TWrapValue
         * @param \Illuminate\Support\iterable<array-key, TWrapValue>|\Illuminate\Support\TWrapValue $value
         * @return \Illuminate\Support\static<array-key, TWrapValue> 
         * @static 
         */ 
        public static function wrap($value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::wrap($value);
        }
        
        /**
         * Get the underlying items from the given collection if applicable.
         *
         * @template TUnwrapKey of array-key
         * @template TUnwrapValue
         * @param array<TUnwrapKey, TUnwrapValue>|\Illuminate\Support\static<TUnwrapKey,  TUnwrapValue>  $value
         * @return array<TUnwrapKey, TUnwrapValue> 
         * @static 
         */ 
        public static function unwrap($value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::unwrap($value);
        }
        
        /**
         * Create a new instance with no items.
         *
         * @return static 
         * @static 
         */ 
        public static function empty()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::empty();
        }
        
        /**
         * Create a new collection by invoking the callback a given amount of times.
         *
         * @template TTimesValue
         * @param int $number
         * @param \Illuminate\Support\(callable(int):  TTimesValue)|null  $callback
         * @return \Illuminate\Support\static<int, TTimesValue> 
         * @static 
         */ 
        public static function times($number, $callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::times($number, $callback);
        }
        
        /**
         * Alias for the "avg" method.
         *
         * @param \Illuminate\Support\(callable(TValue):  float|int)|string|null  $callback
         * @return float|int|null 
         * @static 
         */ 
        public static function average($callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::average($callback);
        }
        
        /**
         * Alias for the "contains" method.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|TValue|string  $key
         * @param mixed $operator
         * @param mixed $value
         * @return bool 
         * @static 
         */ 
        public static function some($key, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::some($key, $operator, $value);
        }
        
        /**
         * Dump the items and end the script.
         *
         * @param mixed $args
         * @return \Illuminate\Support\never 
         * @static 
         */ 
        public static function dd(...$args)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::dd(...$args);
        }
        
        /**
         * Dump the items.
         *
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function dump()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::dump();
        }
        
        /**
         * Execute a callback over each item.
         *
         * @param \Illuminate\Support\callable(TValue,  TKey): mixed  $callback
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function each($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::each($callback);
        }
        
        /**
         * Execute a callback over each nested chunk of items.
         *
         * @param \Illuminate\Support\callable(...mixed):  mixed  $callback
         * @return static 
         * @static 
         */ 
        public static function eachSpread($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::eachSpread($callback);
        }
        
        /**
         * Determine if all items pass the given truth test.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|TValue|string  $key
         * @param mixed $operator
         * @param mixed $value
         * @return bool 
         * @static 
         */ 
        public static function every($key, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::every($key, $operator, $value);
        }
        
        /**
         * Get the first item by the given key value pair.
         *
         * @param callable|string $key
         * @param mixed $operator
         * @param mixed $value
         * @return \Illuminate\Support\TValue|null 
         * @static 
         */ 
        public static function firstWhere($key, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::firstWhere($key, $operator, $value);
        }
        
        /**
         * Get a single key's value from the first matching item in the collection.
         *
         * @template TValueDefault
         * @param string $key
         * @param \Illuminate\Support\TValueDefault|\Illuminate\Support\(\Closure():  TValueDefault)  $default
         * @return \Illuminate\Support\TValue|\Illuminate\Support\TValueDefault 
         * @static 
         */ 
        public static function value($key, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::value($key, $default);
        }
        
        /**
         * Determine if the collection is not empty.
         *
         * @return bool 
         * @static 
         */ 
        public static function isNotEmpty()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::isNotEmpty();
        }
        
        /**
         * Run a map over each nested chunk of items.
         *
         * @template TMapSpreadValue
         * @param \Illuminate\Support\callable(mixed):  TMapSpreadValue  $callback
         * @return \Illuminate\Support\static<TKey, TMapSpreadValue> 
         * @static 
         */ 
        public static function mapSpread($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::mapSpread($callback);
        }
        
        /**
         * Run a grouping map over the items.
         * 
         * The callback should return an associative array with a single key/value pair.
         *
         * @template TMapToGroupsKey of array-key
         * @template TMapToGroupsValue
         * @param \Illuminate\Support\callable(TValue,  TKey): array<TMapToGroupsKey, TMapToGroupsValue>  $callback
         * @return \Illuminate\Support\static<TMapToGroupsKey, static<int, TMapToGroupsValue>> 
         * @static 
         */ 
        public static function mapToGroups($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::mapToGroups($callback);
        }
        
        /**
         * Map a collection and flatten the result by a single level.
         *
         * @template TFlatMapKey of array-key
         * @template TFlatMapValue
         * @param \Illuminate\Support\callable(TValue,  TKey): (\Illuminate\Support\Collection<TFlatMapKey, TFlatMapValue>|array<TFlatMapKey, TFlatMapValue>)  $callback
         * @return \Illuminate\Support\static<TFlatMapKey, TFlatMapValue> 
         * @static 
         */ 
        public static function flatMap($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::flatMap($callback);
        }
        
        /**
         * Map the values into a new class.
         *
         * @template TMapIntoValue
         * @param \Illuminate\Support\class-string<TMapIntoValue> $class
         * @return \Illuminate\Support\static<TKey, TMapIntoValue> 
         * @static 
         */ 
        public static function mapInto($class)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::mapInto($class);
        }
        
        /**
         * Get the min value of a given key.
         *
         * @param \Illuminate\Support\(callable(TValue):mixed)|string|null $callback
         * @return mixed 
         * @static 
         */ 
        public static function min($callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::min($callback);
        }
        
        /**
         * Get the max value of a given key.
         *
         * @param \Illuminate\Support\(callable(TValue):mixed)|string|null $callback
         * @return mixed 
         * @static 
         */ 
        public static function max($callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::max($callback);
        }
        
        /**
         * "Paginate" the collection by slicing it into a smaller collection.
         *
         * @param int $page
         * @param int $perPage
         * @return static 
         * @static 
         */ 
        public static function forPage($page, $perPage)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::forPage($page, $perPage);
        }
        
        /**
         * Partition the collection into two arrays using the given callback or key.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|TValue|string  $key
         * @param \Illuminate\Support\TValue|string|null $operator
         * @param \Illuminate\Support\TValue|null $value
         * @return \Illuminate\Support\static<int<0, 1>, static<TKey, TValue>> 
         * @static 
         */ 
        public static function partition($key, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::partition($key, $operator, $value);
        }
        
        /**
         * Get the sum of the given values.
         *
         * @param \Illuminate\Support\(callable(TValue):  mixed)|string|null  $callback
         * @return mixed 
         * @static 
         */ 
        public static function sum($callback = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::sum($callback);
        }
        
        /**
         * Apply the callback if the collection is empty.
         *
         * @template TWhenEmptyReturnType
         * @param \Illuminate\Support\(callable($this):  TWhenEmptyReturnType)  $callback
         * @param \Illuminate\Support\(callable($this):  TWhenEmptyReturnType)|null  $default
         * @return $this|\Illuminate\Support\TWhenEmptyReturnType 
         * @static 
         */ 
        public static function whenEmpty($callback, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whenEmpty($callback, $default);
        }
        
        /**
         * Apply the callback if the collection is not empty.
         *
         * @template TWhenNotEmptyReturnType
         * @param \Illuminate\Support\callable($this):  TWhenNotEmptyReturnType  $callback
         * @param \Illuminate\Support\(callable($this):  TWhenNotEmptyReturnType)|null  $default
         * @return $this|\Illuminate\Support\TWhenNotEmptyReturnType 
         * @static 
         */ 
        public static function whenNotEmpty($callback, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whenNotEmpty($callback, $default);
        }
        
        /**
         * Apply the callback unless the collection is empty.
         *
         * @template TUnlessEmptyReturnType
         * @param \Illuminate\Support\callable($this):  TUnlessEmptyReturnType  $callback
         * @param \Illuminate\Support\(callable($this):  TUnlessEmptyReturnType)|null  $default
         * @return $this|\Illuminate\Support\TUnlessEmptyReturnType 
         * @static 
         */ 
        public static function unlessEmpty($callback, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::unlessEmpty($callback, $default);
        }
        
        /**
         * Apply the callback unless the collection is not empty.
         *
         * @template TUnlessNotEmptyReturnType
         * @param \Illuminate\Support\callable($this):  TUnlessNotEmptyReturnType  $callback
         * @param \Illuminate\Support\(callable($this):  TUnlessNotEmptyReturnType)|null  $default
         * @return $this|\Illuminate\Support\TUnlessNotEmptyReturnType 
         * @static 
         */ 
        public static function unlessNotEmpty($callback, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::unlessNotEmpty($callback, $default);
        }
        
        /**
         * Filter items by the given key value pair.
         *
         * @param callable|string $key
         * @param mixed $operator
         * @param mixed $value
         * @return static 
         * @static 
         */ 
        public static function where($key, $operator = null, $value = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::where($key, $operator, $value);
        }
        
        /**
         * Filter items where the value for the given key is null.
         *
         * @param string|null $key
         * @return static 
         * @static 
         */ 
        public static function whereNull($key = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereNull($key);
        }
        
        /**
         * Filter items where the value for the given key is not null.
         *
         * @param string|null $key
         * @return static 
         * @static 
         */ 
        public static function whereNotNull($key = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereNotNull($key);
        }
        
        /**
         * Filter items by the given key value pair using strict comparison.
         *
         * @param string $key
         * @param mixed $value
         * @return static 
         * @static 
         */ 
        public static function whereStrict($key, $value)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereStrict($key, $value);
        }
        
        /**
         * Filter items by the given key value pair.
         *
         * @param string $key
         * @param \Illuminate\Contracts\Support\Arrayable|\Illuminate\Support\iterable $values
         * @param bool $strict
         * @return static 
         * @static 
         */ 
        public static function whereIn($key, $values, $strict = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereIn($key, $values, $strict);
        }
        
        /**
         * Filter items by the given key value pair using strict comparison.
         *
         * @param string $key
         * @param \Illuminate\Contracts\Support\Arrayable|\Illuminate\Support\iterable $values
         * @return static 
         * @static 
         */ 
        public static function whereInStrict($key, $values)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereInStrict($key, $values);
        }
        
        /**
         * Filter items such that the value of the given key is between the given values.
         *
         * @param string $key
         * @param \Illuminate\Contracts\Support\Arrayable|\Illuminate\Support\iterable $values
         * @return static 
         * @static 
         */ 
        public static function whereBetween($key, $values)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereBetween($key, $values);
        }
        
        /**
         * Filter items such that the value of the given key is not between the given values.
         *
         * @param string $key
         * @param \Illuminate\Contracts\Support\Arrayable|\Illuminate\Support\iterable $values
         * @return static 
         * @static 
         */ 
        public static function whereNotBetween($key, $values)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereNotBetween($key, $values);
        }
        
        /**
         * Filter items by the given key value pair.
         *
         * @param string $key
         * @param \Illuminate\Contracts\Support\Arrayable|\Illuminate\Support\iterable $values
         * @param bool $strict
         * @return static 
         * @static 
         */ 
        public static function whereNotIn($key, $values, $strict = false)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereNotIn($key, $values, $strict);
        }
        
        /**
         * Filter items by the given key value pair using strict comparison.
         *
         * @param string $key
         * @param \Illuminate\Contracts\Support\Arrayable|\Illuminate\Support\iterable $values
         * @return static 
         * @static 
         */ 
        public static function whereNotInStrict($key, $values)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereNotInStrict($key, $values);
        }
        
        /**
         * Filter the items, removing any items that don't match the given type(s).
         *
         * @template TWhereInstanceOf
         * @param \Illuminate\Support\class-string<TWhereInstanceOf>|array<array-key, class-string<TWhereInstanceOf>> $type
         * @return \Illuminate\Support\static<TKey, TWhereInstanceOf> 
         * @static 
         */ 
        public static function whereInstanceOf($type)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::whereInstanceOf($type);
        }
        
        /**
         * Pass the collection to the given callback and return the result.
         *
         * @template TPipeReturnType
         * @param \Illuminate\Support\callable($this):  TPipeReturnType  $callback
         * @return \Illuminate\Support\TPipeReturnType 
         * @static 
         */ 
        public static function pipe($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::pipe($callback);
        }
        
        /**
         * Pass the collection into a new class.
         *
         * @template TPipeIntoValue
         * @param \Illuminate\Support\class-string<TPipeIntoValue> $class
         * @return \Illuminate\Support\TPipeIntoValue 
         * @static 
         */ 
        public static function pipeInto($class)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::pipeInto($class);
        }
        
        /**
         * Pass the collection through a series of callable pipes and return the result.
         *
         * @param array<callable> $callbacks
         * @return mixed 
         * @static 
         */ 
        public static function pipeThrough($callbacks)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::pipeThrough($callbacks);
        }
        
        /**
         * Reduce the collection to a single value.
         *
         * @template TReduceInitial
         * @template TReduceReturnType
         * @param \Illuminate\Support\callable(TReduceInitial|\Illuminate\Support\TReduceReturnType,  TValue, TKey): TReduceReturnType  $callback
         * @param \Illuminate\Support\TReduceInitial $initial
         * @return \Illuminate\Support\TReduceReturnType 
         * @static 
         */ 
        public static function reduce($callback, $initial = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::reduce($callback, $initial);
        }
        
        /**
         * Reduce the collection to multiple aggregate values.
         *
         * @param callable $callback
         * @param mixed $initial
         * @return array 
         * @throws \UnexpectedValueException
         * @static 
         */ 
        public static function reduceSpread($callback, ...$initial)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::reduceSpread($callback, ...$initial);
        }
        
        /**
         * Reduce an associative collection to a single value.
         *
         * @template TReduceWithKeysInitial
         * @template TReduceWithKeysReturnType
         * @param \Illuminate\Support\callable(TReduceWithKeysInitial|\Illuminate\Support\TReduceWithKeysReturnType,  TValue, TKey): TReduceWithKeysReturnType  $callback
         * @param \Illuminate\Support\TReduceWithKeysInitial $initial
         * @return \Illuminate\Support\TReduceWithKeysReturnType 
         * @static 
         */ 
        public static function reduceWithKeys($callback, $initial = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::reduceWithKeys($callback, $initial);
        }
        
        /**
         * Create a collection of all elements that do not pass a given truth test.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): bool)|bool|TValue  $callback
         * @return static 
         * @static 
         */ 
        public static function reject($callback = true)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::reject($callback);
        }
        
        /**
         * Pass the collection to the given callback and then return it.
         *
         * @param \Illuminate\Support\callable($this):  mixed  $callback
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function tap($callback)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::tap($callback);
        }
        
        /**
         * Return only unique items from the collection array using strict comparison.
         *
         * @param \Illuminate\Support\(callable(TValue,  TKey): mixed)|string|null  $key
         * @return static 
         * @static 
         */ 
        public static function uniqueStrict($key = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::uniqueStrict($key);
        }
        
        /**
         * Collect the values into a collection.
         *
         * @return \Illuminate\Support\Collection<TKey, TValue> 
         * @static 
         */ 
        public static function collect()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::collect();
        }
        
        /**
         * Get the collection of items as a plain array.
         *
         * @return array<TKey, mixed> 
         * @static 
         */ 
        public static function toArray()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::toArray();
        }
        
        /**
         * Convert the object into something JSON serializable.
         *
         * @return array<TKey, mixed> 
         * @static 
         */ 
        public static function jsonSerialize()
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::jsonSerialize();
        }
        
        /**
         * Get the collection of items as JSON.
         *
         * @param int $options
         * @return string 
         * @static 
         */ 
        public static function toJson($options = 0)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::toJson($options);
        }
        
        /**
         * Get a CachingIterator instance.
         *
         * @param int $flags
         * @return \CachingIterator 
         * @static 
         */ 
        public static function getCachingIterator($flags = 1)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::getCachingIterator($flags);
        }
        
        /**
         * Indicate that the model's string representation should be escaped when __toString is invoked.
         *
         * @param bool $escape
         * @return \KodiCMS\Assets\PackageManager 
         * @static 
         */ 
        public static function escapeWhenCastingToString($escape = true)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::escapeWhenCastingToString($escape);
        }
        
        /**
         * Add a method to the list of proxied methods.
         *
         * @param string $method
         * @return void 
         * @static 
         */ 
        public static function proxy($method)
        {
            //Method inherited from \Illuminate\Support\Collection            
            \KodiCMS\Assets\PackageManager::proxy($method);
        }
        
        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param \Illuminate\Support\(\Closure($this):  TWhenParameter)|TWhenParameter|null  $value
         * @param \Illuminate\Support\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
         * @param \Illuminate\Support\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
         * @return $this|\Illuminate\Support\TWhenReturnType 
         * @static 
         */ 
        public static function when($value = null, $callback = null, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::when($value, $callback, $default);
        }
        
        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param \Illuminate\Support\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
         * @param \Illuminate\Support\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
         * @param \Illuminate\Support\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
         * @return $this|\Illuminate\Support\TUnlessReturnType 
         * @static 
         */ 
        public static function unless($value = null, $callback = null, $default = null)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::unless($value, $callback, $default);
        }
        
        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */ 
        public static function macro($name, $macro)
        {
            //Method inherited from \Illuminate\Support\Collection            
            \KodiCMS\Assets\PackageManager::macro($name, $macro);
        }
        
        /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */ 
        public static function mixin($mixin, $replace = true)
        {
            //Method inherited from \Illuminate\Support\Collection            
            \KodiCMS\Assets\PackageManager::mixin($mixin, $replace);
        }
        
        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */ 
        public static function hasMacro($name)
        {
            //Method inherited from \Illuminate\Support\Collection            
            return \KodiCMS\Assets\PackageManager::hasMacro($name);
        }
        
        /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */ 
        public static function flushMacros()
        {
            //Method inherited from \Illuminate\Support\Collection            
            \KodiCMS\Assets\PackageManager::flushMacros();
        }
         
    }

    class Meta {
        
        /**
         * 
         *
         * @return \KodiCMS\Assets\AssetsInterface 
         * @static 
         */ 
        public static function assets()
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::assets();
        }
        
        /**
         * 
         *
         * @param \KodiCMS\Assets\MetaDataInterface $data
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function setMetaData($data)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::setMetaData($data);
        }
        
        /**
         * 
         *
         * @param string $title
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function setTitle($title)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::setTitle($title);
        }
        
        /**
         * 
         *
         * @param string $description
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function setMetaDescription($description)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::setMetaDescription($description);
        }
        
        /**
         * 
         *
         * @param string|array $keywords
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function setMetaKeywords($keywords)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::setMetaKeywords($keywords);
        }
        
        /**
         * 
         *
         * @param string $robots
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function setMetaRobots($robots)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::setMetaRobots($robots);
        }
        
        /**
         * 
         *
         * @param \KodiCMS\Assets\SocialMediaTagsInterface $socialTags
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function addSocialTags($socialTags)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::addSocialTags($socialTags);
        }
        
        /**
         * 
         *
         * @param array $attributes
         * @param null|string $group
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function addMeta($attributes, $group = null)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::addMeta($attributes, $group);
        }
        
        /**
         * Указание favicon.
         *
         * @param string $url
         * @param string $rel
         * @param string $type
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function setFavicon($url, $rel = 'shortcut icon', $type = 'image/x-icon')
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::setFavicon($url, $rel, $type);
        }
        
        /**
         * 
         *
         * @param string $handle
         * @param string $content
         * @param array $params
         * @param null|string $dependency
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function addTagToGroup($handle, $content, $params = [], $dependency = null)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::addTagToGroup($handle, $content, $params, $dependency);
        }
        
        /**
         * 
         *
         * @param string|null $handle
         * @return \SleepingOwl\Admin\Templates\Meta 
         * @static 
         */ 
        public static function removeFromGroup($handle = null)
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::removeFromGroup($handle);
        }
        
        /**
         * 
         *
         * @return string 
         * @static 
         */ 
        public static function render()
        {
            //Method inherited from \KodiCMS\Assets\Meta            
            return \SleepingOwl\Admin\Templates\Meta::render();
        }
         
    }
 
}

namespace SleepingOwl\Admin\Facades { 

    class WysiwygManager {
        
        /**
         * 
         *
         * @return string|null 
         * @static 
         */ 
        public static function getDefaultEditorId()
        {
            return \SleepingOwl\Admin\Wysiwyg\Manager::getDefaultEditorId();
        }
        
        /**
         * 
         *
         * @param string $editorId
         * @param \SleepingOwl\Admin\Contracts\Wysiwyg\WysiwygFilterInterface|null $filter
         * @param string|null $name
         * @return \SleepingOwl\Admin\Contracts\Wysiwyg\WysiwygEditorInterface 
         * @static 
         */ 
        public static function register($editorId, $filter = null, $name = null)
        {
            return \SleepingOwl\Admin\Wysiwyg\Manager::register($editorId, $filter, $name);
        }
        
        /**
         * 
         *
         * @return \Illuminate\Support\Collection|\SleepingOwl\Admin\Contracts\Wysiwyg\WysiwygEditorInterface[] 
         * @static 
         */ 
        public static function getFilters()
        {
            return \SleepingOwl\Admin\Wysiwyg\Manager::getFilters();
        }
        
        /**
         * 
         *
         * @param string $editorId
         * @return \SleepingOwl\Admin\Contracts\Wysiwyg\WysiwygEditorInterface|null 
         * @static 
         */ 
        public static function getEditor($editorId)
        {
            return \SleepingOwl\Admin\Wysiwyg\Manager::getEditor($editorId);
        }
        
        /**
         * 
         *
         * @static 
         */ 
        public static function loadDefaultEditor()
        {
            return \SleepingOwl\Admin\Wysiwyg\Manager::loadDefaultEditor();
        }
        
        /**
         * 
         *
         * @param string $editorId
         * @return bool 
         * @static 
         */ 
        public static function loadEditor($editorId)
        {
            return \SleepingOwl\Admin\Wysiwyg\Manager::loadEditor($editorId);
        }
        
        /**
         * 
         *
         * @param string $editorId
         * @param string $text
         * @return string string
         * @throws WysiwygException
         * @static 
         */ 
        public static function applyFilter($editorId, $text)
        {
            return \SleepingOwl\Admin\Wysiwyg\Manager::applyFilter($editorId, $text);
        }
        
        /**
         * 
         *
         * @return array 
         * @static 
         */ 
        public static function getFiltersList()
        {
            return \SleepingOwl\Admin\Wysiwyg\Manager::getFiltersList();
        }
         
    }

    class MessageStack {
         
    }

    class Widgets {
        
        /**
         * 
         *
         * @param $widget
         * @return \SleepingOwl\Admin\Widgets\WidgetsRegistry 
         * @static 
         */ 
        public static function registerWidget($widget)
        {
            return \SleepingOwl\Admin\Widgets\WidgetsRegistry::registerWidget($widget);
        }
        
        /**
         * 
         *
         * @param \Illuminate\Contracts\View\Factory $factory
         * @static 
         */ 
        public static function placeWidgets($factory)
        {
            return \SleepingOwl\Admin\Widgets\WidgetsRegistry::placeWidgets($factory);
        }
        
        /**
         * 
         *
         * @param mixed $widget
         * @return mixed 
         * @static 
         */ 
        public static function makeWidget($widget)
        {
            return \SleepingOwl\Admin\Widgets\WidgetsRegistry::makeWidget($widget);
        }
        
        /**
         * 
         *
         * @param $widget
         * @return \Closure 
         * @static 
         */ 
        public static function createClassWidget($widget)
        {
            return \SleepingOwl\Admin\Widgets\WidgetsRegistry::createClassWidget($widget);
        }
         
    }
 
}


namespace  { 

    class App extends \Illuminate\Support\Facades\App {}

    class Arr extends \Illuminate\Support\Arr {}

    class Artisan extends \Illuminate\Support\Facades\Artisan {}

    class Auth extends \Illuminate\Support\Facades\Auth {}

    class Blade extends \Illuminate\Support\Facades\Blade {}

    class Broadcast extends \Illuminate\Support\Facades\Broadcast {}

    class Bus extends \Illuminate\Support\Facades\Bus {}

    class Cache extends \Illuminate\Support\Facades\Cache {}

    class Config extends \Illuminate\Support\Facades\Config {}

    class Cookie extends \Illuminate\Support\Facades\Cookie {}

    class Crypt extends \Illuminate\Support\Facades\Crypt {}

    class Date extends \Illuminate\Support\Facades\Date {}

    class DB extends \Illuminate\Support\Facades\DB {}

    class Eloquent extends \Illuminate\Database\Eloquent\Model {         
            /**
             * Create and return an un-saved model instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @static 
             */ 
            public static function make($attributes = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::make($attributes);
            }
         
            /**
             * Register a new global scope.
             *
             * @param string $identifier
             * @param \Illuminate\Database\Eloquent\Scope|\Closure $scope
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withGlobalScope($identifier, $scope)
            {    
                return \Illuminate\Database\Eloquent\Builder::withGlobalScope($identifier, $scope);
            }
         
            /**
             * Remove a registered global scope.
             *
             * @param \Illuminate\Database\Eloquent\Scope|string $scope
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withoutGlobalScope($scope)
            {    
                return \Illuminate\Database\Eloquent\Builder::withoutGlobalScope($scope);
            }
         
            /**
             * Remove all or passed registered global scopes.
             *
             * @param array|null $scopes
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withoutGlobalScopes($scopes = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::withoutGlobalScopes($scopes);
            }
         
            /**
             * Get an array of global scopes that were removed from the query.
             *
             * @return array 
             * @static 
             */ 
            public static function removedScopes()
            {    
                return \Illuminate\Database\Eloquent\Builder::removedScopes();
            }
         
            /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereKey($id)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereKey($id);
            }
         
            /**
             * Add a where clause on the primary key to the query.
             *
             * @param mixed $id
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereKeyNot($id)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereKeyNot($id);
            }
         
            /**
             * Add a basic where clause to the query.
             *
             * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function where($column, $operator = null, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Eloquent\Builder::where($column, $operator, $value, $boolean);
            }
         
            /**
             * Add a basic where clause to the query, and return the first result.
             *
             * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Eloquent\Model|static|null 
             * @static 
             */ 
            public static function firstWhere($column, $operator = null, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Eloquent\Builder::firstWhere($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where" clause to the query.
             *
             * @param \Closure|array|string|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhere($column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhere($column, $operator, $value);
            }
         
            /**
             * Add a basic "where not" clause to the query.
             *
             * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereNot($column, $operator = null, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Eloquent\Builder::whereNot($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where not" clause to the query.
             *
             * @param \Closure|array|string|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereNot($column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereNot($column, $operator, $value);
            }
         
            /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string|\Illuminate\Contracts\Database\Query\Expression $column
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function latest($column = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::latest($column);
            }
         
            /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param string|\Illuminate\Contracts\Database\Query\Expression $column
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function oldest($column = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::oldest($column);
            }
         
            /**
             * Create a collection of models from plain arrays.
             *
             * @param array $items
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function hydrate($items)
            {    
                return \Illuminate\Database\Eloquent\Builder::hydrate($items);
            }
         
            /**
             * Create a collection of models from a raw query.
             *
             * @param string $query
             * @param array $bindings
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function fromQuery($query, $bindings = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::fromQuery($query, $bindings);
            }
         
            /**
             * Find a model by its primary key.
             *
             * @param mixed $id
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null 
             * @static 
             */ 
            public static function find($id, $columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::find($id, $columns);
            }
         
            /**
             * Find multiple models by their primary keys.
             *
             * @param \Illuminate\Contracts\Support\Arrayable|array $ids
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Collection 
             * @static 
             */ 
            public static function findMany($ids, $columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::findMany($ids, $columns);
            }
         
            /**
             * Find a model by its primary key or throw an exception.
             *
             * @param mixed $id
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static|static[] 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
             * @static 
             */ 
            public static function findOrFail($id, $columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::findOrFail($id, $columns);
            }
         
            /**
             * Find a model by its primary key or return fresh model instance.
             *
             * @param mixed $id
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @static 
             */ 
            public static function findOrNew($id, $columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::findOrNew($id, $columns);
            }
         
            /**
             * Find a model by its primary key or call a callback.
             *
             * @param mixed $id
             * @param \Closure|array|string $columns
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|mixed 
             * @static 
             */ 
            public static function findOr($id, $columns = [], $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::findOr($id, $columns, $callback);
            }
         
            /**
             * Get the first record matching the attributes or instantiate it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @static 
             */ 
            public static function firstOrNew($attributes = [], $values = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrNew($attributes, $values);
            }
         
            /**
             * Get the first record matching the attributes or create it.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @static 
             */ 
            public static function firstOrCreate($attributes = [], $values = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrCreate($attributes, $values);
            }
         
            /**
             * Create or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @static 
             */ 
            public static function updateOrCreate($attributes, $values = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::updateOrCreate($attributes, $values);
            }
         
            /**
             * Execute the query and get the first result or throw an exception.
             *
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
             * @static 
             */ 
            public static function firstOrFail($columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOrFail($columns);
            }
         
            /**
             * Execute the query and get the first result or call a callback.
             *
             * @param \Closure|array|string $columns
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Model|static|mixed 
             * @static 
             */ 
            public static function firstOr($columns = [], $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::firstOr($columns, $callback);
            }
         
            /**
             * Execute the query and get the first result if it's the sole matching record.
             *
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Model 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
             * @throws \Illuminate\Database\MultipleRecordsFoundException
             * @static 
             */ 
            public static function sole($columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::sole($columns);
            }
         
            /**
             * Get a single column's value from the first result of a query.
             *
             * @param string|\Illuminate\Contracts\Database\Query\Expression $column
             * @return mixed 
             * @static 
             */ 
            public static function value($column)
            {    
                return \Illuminate\Database\Eloquent\Builder::value($column);
            }
         
            /**
             * Get a single column's value from the first result of a query if it's the sole matching record.
             *
             * @param string|\Illuminate\Contracts\Database\Query\Expression $column
             * @return mixed 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
             * @throws \Illuminate\Database\MultipleRecordsFoundException
             * @static 
             */ 
            public static function soleValue($column)
            {    
                return \Illuminate\Database\Eloquent\Builder::soleValue($column);
            }
         
            /**
             * Get a single column's value from the first result of the query or throw an exception.
             *
             * @param string|\Illuminate\Contracts\Database\Query\Expression $column
             * @return mixed 
             * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
             * @static 
             */ 
            public static function valueOrFail($column)
            {    
                return \Illuminate\Database\Eloquent\Builder::valueOrFail($column);
            }
         
            /**
             * Execute the query as a "select" statement.
             *
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Collection|static[] 
             * @static 
             */ 
            public static function get($columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::get($columns);
            }
         
            /**
             * Get the hydrated models without eager loading.
             *
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Model[]|static[] 
             * @static 
             */ 
            public static function getModels($columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::getModels($columns);
            }
         
            /**
             * Eager load the relationships for the models.
             *
             * @param array $models
             * @return array 
             * @static 
             */ 
            public static function eagerLoadRelations($models)
            {    
                return \Illuminate\Database\Eloquent\Builder::eagerLoadRelations($models);
            }
         
            /**
             * Get a lazy collection for the given query.
             *
             * @return \Illuminate\Support\LazyCollection 
             * @static 
             */ 
            public static function cursor()
            {    
                return \Illuminate\Database\Eloquent\Builder::cursor();
            }
         
            /**
             * Get a collection with the values of a given column.
             *
             * @param string|\Illuminate\Contracts\Database\Query\Expression $column
             * @param string|null $key
             * @return \Illuminate\Support\Collection 
             * @static 
             */ 
            public static function pluck($column, $key = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::pluck($column, $key);
            }
         
            /**
             * Paginate the given query.
             *
             * @param int|null|\Closure $perPage
             * @param array|string $columns
             * @param string $pageName
             * @param int|null $page
             * @param \Closure|int|null $total
             * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::paginate($perPage, $columns, $pageName, $page);
            }
         
            /**
             * Paginate the given query into a simple paginator.
             *
             * @param int|null $perPage
             * @param array|string $columns
             * @param string $pageName
             * @param int|null $page
             * @return \Illuminate\Contracts\Pagination\Paginator 
             * @static 
             */ 
            public static function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::simplePaginate($perPage, $columns, $pageName, $page);
            }
         
            /**
             * Paginate the given query into a cursor paginator.
             *
             * @param int|null $perPage
             * @param array|string $columns
             * @param string $cursorName
             * @param \Illuminate\Pagination\Cursor|string|null $cursor
             * @return \Illuminate\Contracts\Pagination\CursorPaginator 
             * @static 
             */ 
            public static function cursorPaginate($perPage = null, $columns = [], $cursorName = 'cursor', $cursor = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::cursorPaginate($perPage, $columns, $cursorName, $cursor);
            }
         
            /**
             * Save a new model and return the instance.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function create($attributes = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::create($attributes);
            }
         
            /**
             * Save a new model and return the instance. Allow mass-assignment.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function forceCreate($attributes)
            {    
                return \Illuminate\Database\Eloquent\Builder::forceCreate($attributes);
            }
         
            /**
             * Save a new model instance with mass assignment without raising model events.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|$this 
             * @static 
             */ 
            public static function forceCreateQuietly($attributes = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::forceCreateQuietly($attributes);
            }
         
            /**
             * Insert new records or update the existing ones.
             *
             * @param array $values
             * @param array|string $uniqueBy
             * @param array|null $update
             * @return int 
             * @static 
             */ 
            public static function upsert($values, $uniqueBy, $update = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::upsert($values, $uniqueBy, $update);
            }
         
            /**
             * Register a replacement for the default delete function.
             *
             * @param \Closure $callback
             * @return void 
             * @static 
             */ 
            public static function onDelete($callback)
            {    
                \Illuminate\Database\Eloquent\Builder::onDelete($callback);
            }
         
            /**
             * Call the given local model scopes.
             *
             * @param array|string $scopes
             * @return static|mixed 
             * @static 
             */ 
            public static function scopes($scopes)
            {    
                return \Illuminate\Database\Eloquent\Builder::scopes($scopes);
            }
         
            /**
             * Apply the scopes to the Eloquent builder instance and return it.
             *
             * @return static 
             * @static 
             */ 
            public static function applyScopes()
            {    
                return \Illuminate\Database\Eloquent\Builder::applyScopes();
            }
         
            /**
             * Prevent the specified relations from being eager loaded.
             *
             * @param mixed $relations
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function without($relations)
            {    
                return \Illuminate\Database\Eloquent\Builder::without($relations);
            }
         
            /**
             * Set the relationships that should be eager loaded while removing any previously added eager loading specifications.
             *
             * @param mixed $relations
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withOnly($relations)
            {    
                return \Illuminate\Database\Eloquent\Builder::withOnly($relations);
            }
         
            /**
             * Create a new instance of the model being queried.
             *
             * @param array $attributes
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @static 
             */ 
            public static function newModelInstance($attributes = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::newModelInstance($attributes);
            }
         
            /**
             * Apply query-time casts to the model instance.
             *
             * @param array $casts
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withCasts($casts)
            {    
                return \Illuminate\Database\Eloquent\Builder::withCasts($casts);
            }
         
            /**
             * Get the underlying query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function getQuery()
            {    
                return \Illuminate\Database\Eloquent\Builder::getQuery();
            }
         
            /**
             * Set the underlying query builder instance.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function setQuery($query)
            {    
                return \Illuminate\Database\Eloquent\Builder::setQuery($query);
            }
         
            /**
             * Get a base query builder instance.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function toBase()
            {    
                return \Illuminate\Database\Eloquent\Builder::toBase();
            }
         
            /**
             * Get the relationships being eagerly loaded.
             *
             * @return array 
             * @static 
             */ 
            public static function getEagerLoads()
            {    
                return \Illuminate\Database\Eloquent\Builder::getEagerLoads();
            }
         
            /**
             * Set the relationships being eagerly loaded.
             *
             * @param array $eagerLoad
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function setEagerLoads($eagerLoad)
            {    
                return \Illuminate\Database\Eloquent\Builder::setEagerLoads($eagerLoad);
            }
         
            /**
             * Indicate that the given relationships should not be eagerly loaded.
             *
             * @param array $relations
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withoutEagerLoad($relations)
            {    
                return \Illuminate\Database\Eloquent\Builder::withoutEagerLoad($relations);
            }
         
            /**
             * Flush the relationships being eagerly loaded.
             *
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withoutEagerLoads()
            {    
                return \Illuminate\Database\Eloquent\Builder::withoutEagerLoads();
            }
         
            /**
             * Get the model instance being queried.
             *
             * @return \Illuminate\Database\Eloquent\Model|static 
             * @static 
             */ 
            public static function getModel()
            {    
                return \Illuminate\Database\Eloquent\Builder::getModel();
            }
         
            /**
             * Set a model instance for the model being queried.
             *
             * @param \Illuminate\Database\Eloquent\Model $model
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function setModel($model)
            {    
                return \Illuminate\Database\Eloquent\Builder::setModel($model);
            }
         
            /**
             * Get the given macro by name.
             *
             * @param string $name
             * @return \Closure 
             * @static 
             */ 
            public static function getMacro($name)
            {    
                return \Illuminate\Database\Eloquent\Builder::getMacro($name);
            }
         
            /**
             * Checks if a macro is registered.
             *
             * @param string $name
             * @return bool 
             * @static 
             */ 
            public static function hasMacro($name)
            {    
                return \Illuminate\Database\Eloquent\Builder::hasMacro($name);
            }
         
            /**
             * Get the given global macro by name.
             *
             * @param string $name
             * @return \Closure 
             * @static 
             */ 
            public static function getGlobalMacro($name)
            {    
                return \Illuminate\Database\Eloquent\Builder::getGlobalMacro($name);
            }
         
            /**
             * Checks if a global macro is registered.
             *
             * @param string $name
             * @return bool 
             * @static 
             */ 
            public static function hasGlobalMacro($name)
            {    
                return \Illuminate\Database\Eloquent\Builder::hasGlobalMacro($name);
            }
         
            /**
             * Clone the Eloquent query builder.
             *
             * @return static 
             * @static 
             */ 
            public static function clone()
            {    
                return \Illuminate\Database\Eloquent\Builder::clone();
            }
         
            /**
             * Chunk the results of the query.
             *
             * @param int $count
             * @param callable $callback
             * @return bool 
             * @static 
             */ 
            public static function chunk($count, $callback)
            {    
                return \Illuminate\Database\Eloquent\Builder::chunk($count, $callback);
            }
         
            /**
             * Run a map over each item while chunking.
             *
             * @param callable $callback
             * @param int $count
             * @return \Illuminate\Support\Collection 
             * @static 
             */ 
            public static function chunkMap($callback, $count = 1000)
            {    
                return \Illuminate\Database\Eloquent\Builder::chunkMap($callback, $count);
            }
         
            /**
             * Execute a callback over each item while chunking.
             *
             * @param callable $callback
             * @param int $count
             * @return bool 
             * @throws \RuntimeException
             * @static 
             */ 
            public static function each($callback, $count = 1000)
            {    
                return \Illuminate\Database\Eloquent\Builder::each($callback, $count);
            }
         
            /**
             * Chunk the results of a query by comparing IDs.
             *
             * @param int $count
             * @param callable $callback
             * @param string|null $column
             * @param string|null $alias
             * @return bool 
             * @static 
             */ 
            public static function chunkById($count, $callback, $column = null, $alias = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::chunkById($count, $callback, $column, $alias);
            }
         
            /**
             * Execute a callback over each item while chunking by ID.
             *
             * @param callable $callback
             * @param int $count
             * @param string|null $column
             * @param string|null $alias
             * @return bool 
             * @static 
             */ 
            public static function eachById($callback, $count = 1000, $column = null, $alias = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::eachById($callback, $count, $column, $alias);
            }
         
            /**
             * Query lazily, by chunks of the given size.
             *
             * @param int $chunkSize
             * @return \Illuminate\Support\LazyCollection 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function lazy($chunkSize = 1000)
            {    
                return \Illuminate\Database\Eloquent\Builder::lazy($chunkSize);
            }
         
            /**
             * Query lazily, by chunking the results of a query by comparing IDs.
             *
             * @param int $chunkSize
             * @param string|null $column
             * @param string|null $alias
             * @return \Illuminate\Support\LazyCollection 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function lazyById($chunkSize = 1000, $column = null, $alias = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::lazyById($chunkSize, $column, $alias);
            }
         
            /**
             * Query lazily, by chunking the results of a query by comparing IDs in descending order.
             *
             * @param int $chunkSize
             * @param string|null $column
             * @param string|null $alias
             * @return \Illuminate\Support\LazyCollection 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function lazyByIdDesc($chunkSize = 1000, $column = null, $alias = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::lazyByIdDesc($chunkSize, $column, $alias);
            }
         
            /**
             * Execute the query and get the first result.
             *
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Model|object|static|null 
             * @static 
             */ 
            public static function first($columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::first($columns);
            }
         
            /**
             * Execute the query and get the first result if it's the sole matching record.
             *
             * @param array|string $columns
             * @return \Illuminate\Database\Eloquent\Model|object|static|null 
             * @throws \Illuminate\Database\RecordsNotFoundException
             * @throws \Illuminate\Database\MultipleRecordsFoundException
             * @static 
             */ 
            public static function baseSole($columns = [])
            {    
                return \Illuminate\Database\Eloquent\Builder::baseSole($columns);
            }
         
            /**
             * Pass the query to a given callback.
             *
             * @param callable $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function tap($callback)
            {    
                return \Illuminate\Database\Eloquent\Builder::tap($callback);
            }
         
            /**
             * Apply the callback if the given "value" is (or resolves to) truthy.
             *
             * @template TWhenParameter
             * @template TWhenReturnType
             * @param \Illuminate\Database\Eloquent\(\Closure($this):  TWhenParameter)|TWhenParameter|null  $value
             * @param \Illuminate\Database\Eloquent\(callable($this,  TWhenParameter): TWhenReturnType)|null  $callback
             * @param \Illuminate\Database\Eloquent\(callable($this,  TWhenParameter): TWhenReturnType)|null  $default
             * @return $this|\Illuminate\Database\Eloquent\TWhenReturnType 
             * @static 
             */ 
            public static function when($value = null, $callback = null, $default = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::when($value, $callback, $default);
            }
         
            /**
             * Apply the callback if the given "value" is (or resolves to) falsy.
             *
             * @template TUnlessParameter
             * @template TUnlessReturnType
             * @param \Illuminate\Database\Eloquent\(\Closure($this):  TUnlessParameter)|TUnlessParameter|null  $value
             * @param \Illuminate\Database\Eloquent\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $callback
             * @param \Illuminate\Database\Eloquent\(callable($this,  TUnlessParameter): TUnlessReturnType)|null  $default
             * @return $this|\Illuminate\Database\Eloquent\TUnlessReturnType 
             * @static 
             */ 
            public static function unless($value = null, $callback = null, $default = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::unless($value, $callback, $default);
            }
         
            /**
             * Add a relationship count / exists condition to the query.
             *
             * @param \Illuminate\Database\Eloquent\Relations\Relation|string $relation
             * @param string $operator
             * @param int $count
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @throws \RuntimeException
             * @static 
             */ 
            public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::has($relation, $operator, $count, $boolean, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orHas($relation, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::orHas($relation, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query.
             *
             * @param string $relation
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function doesntHave($relation, $boolean = 'and', $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::doesntHave($relation, $boolean, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param string $relation
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orDoesntHave($relation)
            {    
                return \Illuminate\Database\Eloquent\Builder::orDoesntHave($relation);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             * 
             * Also load the relationship with same condition.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::withWhereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereHas($relation, $callback, $operator, $count);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereDoesntHave($relation, $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereDoesntHave($relation, $callback);
            }
         
            /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param string $relation
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereDoesntHave($relation, $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereDoesntHave($relation, $callback);
            }
         
            /**
             * Add a polymorphic relationship count / exists condition to the query.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param string $operator
             * @param int $count
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::hasMorph($relation, $types, $operator, $count, $boolean, $callback);
            }
         
            /**
             * Add a polymorphic relationship count / exists condition to the query with an "or".
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orHasMorph($relation, $types, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::orHasMorph($relation, $types, $operator, $count);
            }
         
            /**
             * Add a polymorphic relationship count / exists condition to the query.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param string $boolean
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function doesntHaveMorph($relation, $types, $boolean = 'and', $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::doesntHaveMorph($relation, $types, $boolean, $callback);
            }
         
            /**
             * Add a polymorphic relationship count / exists condition to the query with an "or".
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orDoesntHaveMorph($relation, $types)
            {    
                return \Illuminate\Database\Eloquent\Builder::orDoesntHaveMorph($relation, $types);
            }
         
            /**
             * Add a polymorphic relationship count / exists condition to the query with where clauses.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereHasMorph($relation, $types, $callback, $operator, $count);
            }
         
            /**
             * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param \Closure|null $callback
             * @param string $operator
             * @param int $count
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereHasMorph($relation, $types, $callback, $operator, $count);
            }
         
            /**
             * Add a polymorphic relationship count / exists condition to the query with where clauses.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereDoesntHaveMorph($relation, $types, $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereDoesntHaveMorph($relation, $types, $callback);
            }
         
            /**
             * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param \Closure|null $callback
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereDoesntHaveMorph($relation, $types, $callback = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereDoesntHaveMorph($relation, $types, $callback);
            }
         
            /**
             * Add a basic where clause to a relationship query.
             *
             * @param string $relation
             * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereRelation($relation, $column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereRelation($relation, $column, $operator, $value);
            }
         
            /**
             * Add an "or where" clause to a relationship query.
             *
             * @param string $relation
             * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereRelation($relation, $column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereRelation($relation, $column, $operator, $value);
            }
         
            /**
             * Add a polymorphic relationship condition to the query with a where clause.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereMorphRelation($relation, $types, $column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::whereMorphRelation($relation, $types, $column, $operator, $value);
            }
         
            /**
             * Add a polymorphic relationship condition to the query with an "or where" clause.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param string|array $types
             * @param \Closure|string|array|\Illuminate\Contracts\Database\Query\Expression $column
             * @param mixed $operator
             * @param mixed $value
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereMorphRelation($relation, $types, $column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereMorphRelation($relation, $types, $column, $operator, $value);
            }
         
            /**
             * Add a morph-to relationship condition to the query.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param \Illuminate\Database\Eloquent\Model|string|null $model
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereMorphedTo($relation, $model, $boolean = 'and')
            {    
                return \Illuminate\Database\Eloquent\Builder::whereMorphedTo($relation, $model, $boolean);
            }
         
            /**
             * Add a not morph-to relationship condition to the query.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param \Illuminate\Database\Eloquent\Model|string $model
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function whereNotMorphedTo($relation, $model, $boolean = 'and')
            {    
                return \Illuminate\Database\Eloquent\Builder::whereNotMorphedTo($relation, $model, $boolean);
            }
         
            /**
             * Add a morph-to relationship condition to the query with an "or where" clause.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param \Illuminate\Database\Eloquent\Model|string|null $model
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereMorphedTo($relation, $model)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereMorphedTo($relation, $model);
            }
         
            /**
             * Add a not morph-to relationship condition to the query with an "or where" clause.
             *
             * @param \Illuminate\Database\Eloquent\Relations\MorphTo|string $relation
             * @param \Illuminate\Database\Eloquent\Model|string $model
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function orWhereNotMorphedTo($relation, $model)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereNotMorphedTo($relation, $model);
            }
         
            /**
             * Add a "belongs to" relationship where clause to the query.
             *
             * @param \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection<\Illuminate\Database\Eloquent\Model> $related
             * @param string|null $relationshipName
             * @param string $boolean
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @throws \Illuminate\Database\Eloquent\RelationNotFoundException
             * @static 
             */ 
            public static function whereBelongsTo($related, $relationshipName = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Eloquent\Builder::whereBelongsTo($related, $relationshipName, $boolean);
            }
         
            /**
             * Add an "BelongsTo" relationship with an "or where" clause to the query.
             *
             * @param \Illuminate\Database\Eloquent\Model $related
             * @param string|null $relationshipName
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @throws \RuntimeException
             * @static 
             */ 
            public static function orWhereBelongsTo($related, $relationshipName = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::orWhereBelongsTo($related, $relationshipName);
            }
         
            /**
             * Add subselect queries to include an aggregate value for a relationship.
             *
             * @param mixed $relations
             * @param string $column
             * @param string $function
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withAggregate($relations, $column, $function = null)
            {    
                return \Illuminate\Database\Eloquent\Builder::withAggregate($relations, $column, $function);
            }
         
            /**
             * Add subselect queries to count the relations.
             *
             * @param mixed $relations
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withCount($relations)
            {    
                return \Illuminate\Database\Eloquent\Builder::withCount($relations);
            }
         
            /**
             * Add subselect queries to include the max of the relation's column.
             *
             * @param string|array $relation
             * @param string $column
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withMax($relation, $column)
            {    
                return \Illuminate\Database\Eloquent\Builder::withMax($relation, $column);
            }
         
            /**
             * Add subselect queries to include the min of the relation's column.
             *
             * @param string|array $relation
             * @param string $column
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withMin($relation, $column)
            {    
                return \Illuminate\Database\Eloquent\Builder::withMin($relation, $column);
            }
         
            /**
             * Add subselect queries to include the sum of the relation's column.
             *
             * @param string|array $relation
             * @param string $column
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withSum($relation, $column)
            {    
                return \Illuminate\Database\Eloquent\Builder::withSum($relation, $column);
            }
         
            /**
             * Add subselect queries to include the average of the relation's column.
             *
             * @param string|array $relation
             * @param string $column
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withAvg($relation, $column)
            {    
                return \Illuminate\Database\Eloquent\Builder::withAvg($relation, $column);
            }
         
            /**
             * Add subselect queries to include the existence of related models.
             *
             * @param string|array $relation
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function withExists($relation)
            {    
                return \Illuminate\Database\Eloquent\Builder::withExists($relation);
            }
         
            /**
             * Merge the where constraints from another query to the current query.
             *
             * @param \Illuminate\Database\Eloquent\Builder $from
             * @return \Illuminate\Database\Eloquent\Builder|static 
             * @static 
             */ 
            public static function mergeConstraintsFrom($from)
            {    
                return \Illuminate\Database\Eloquent\Builder::mergeConstraintsFrom($from);
            }
         
            /**
             * Set the columns to be selected.
             *
             * @param array|mixed $columns
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function select($columns = [])
            {    
                return \Illuminate\Database\Query\Builder::select($columns);
            }
         
            /**
             * Add a subselect expression to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
             * @param string $as
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function selectSub($query, $as)
            {    
                return \Illuminate\Database\Query\Builder::selectSub($query, $as);
            }
         
            /**
             * Add a new "raw" select expression to the query.
             *
             * @param string $expression
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function selectRaw($expression, $bindings = [])
            {    
                return \Illuminate\Database\Query\Builder::selectRaw($expression, $bindings);
            }
         
            /**
             * Makes "from" fetch from a subquery.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
             * @param string $as
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function fromSub($query, $as)
            {    
                return \Illuminate\Database\Query\Builder::fromSub($query, $as);
            }
         
            /**
             * Add a raw from clause to the query.
             *
             * @param string $expression
             * @param mixed $bindings
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function fromRaw($expression, $bindings = [])
            {    
                return \Illuminate\Database\Query\Builder::fromRaw($expression, $bindings);
            }
         
            /**
             * Add a new select column to the query.
             *
             * @param array|mixed $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function addSelect($column)
            {    
                return \Illuminate\Database\Query\Builder::addSelect($column);
            }
         
            /**
             * Force the query to only return distinct results.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function distinct()
            {    
                return \Illuminate\Database\Query\Builder::distinct();
            }
         
            /**
             * Set the table which the query is targeting.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $table
             * @param string|null $as
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function from($table, $as = null)
            {    
                return \Illuminate\Database\Query\Builder::from($table, $as);
            }
         
            /**
             * Add an index hint to suggest a query index.
             *
             * @param string $index
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function useIndex($index)
            {    
                return \Illuminate\Database\Query\Builder::useIndex($index);
            }
         
            /**
             * Add an index hint to force a query index.
             *
             * @param string $index
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forceIndex($index)
            {    
                return \Illuminate\Database\Query\Builder::forceIndex($index);
            }
         
            /**
             * Add an index hint to ignore a query index.
             *
             * @param string $index
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function ignoreIndex($index)
            {    
                return \Illuminate\Database\Query\Builder::ignoreIndex($index);
            }
         
            /**
             * Add a join clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $table
             * @param \Closure|string $first
             * @param string|null $operator
             * @param string|null $second
             * @param string $type
             * @param bool $where
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {    
                return \Illuminate\Database\Query\Builder::join($table, $first, $operator, $second, $type, $where);
            }
         
            /**
             * Add a "join where" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $table
             * @param \Closure|string $first
             * @param string $operator
             * @param string $second
             * @param string $type
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
            {    
                return \Illuminate\Database\Query\Builder::joinWhere($table, $first, $operator, $second, $type);
            }
         
            /**
             * Add a subquery join clause to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
             * @param string $as
             * @param \Closure|string $first
             * @param string|null $operator
             * @param string|null $second
             * @param string $type
             * @param bool $where
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function joinSub($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false)
            {    
                return \Illuminate\Database\Query\Builder::joinSub($query, $as, $first, $operator, $second, $type, $where);
            }
         
            /**
             * Add a left join to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $table
             * @param \Closure|string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function leftJoin($table, $first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::leftJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a "join where" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $table
             * @param \Closure|string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function leftJoinWhere($table, $first, $operator, $second)
            {    
                return \Illuminate\Database\Query\Builder::leftJoinWhere($table, $first, $operator, $second);
            }
         
            /**
             * Add a subquery left join to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
             * @param string $as
             * @param \Closure|string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function leftJoinSub($query, $as, $first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::leftJoinSub($query, $as, $first, $operator, $second);
            }
         
            /**
             * Add a right join to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $table
             * @param \Closure|string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function rightJoin($table, $first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::rightJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a "right join where" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $table
             * @param \Closure|string $first
             * @param string $operator
             * @param string $second
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function rightJoinWhere($table, $first, $operator, $second)
            {    
                return \Illuminate\Database\Query\Builder::rightJoinWhere($table, $first, $operator, $second);
            }
         
            /**
             * Add a subquery right join to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
             * @param string $as
             * @param \Closure|string $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function rightJoinSub($query, $as, $first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::rightJoinSub($query, $as, $first, $operator, $second);
            }
         
            /**
             * Add a "cross join" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $table
             * @param \Closure|string|null $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function crossJoin($table, $first = null, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::crossJoin($table, $first, $operator, $second);
            }
         
            /**
             * Add a subquery cross join to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
             * @param string $as
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function crossJoinSub($query, $as)
            {    
                return \Illuminate\Database\Query\Builder::crossJoinSub($query, $as);
            }
         
            /**
             * Merge an array of where clauses and bindings.
             *
             * @param array $wheres
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function mergeWheres($wheres, $bindings)
            {    
                return \Illuminate\Database\Query\Builder::mergeWheres($wheres, $bindings);
            }
         
            /**
             * Prepare the value and operator for a where clause.
             *
             * @param string $value
             * @param string $operator
             * @param bool $useDefault
             * @return array 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function prepareValueAndOperator($value, $operator, $useDefault = false)
            {    
                return \Illuminate\Database\Query\Builder::prepareValueAndOperator($value, $operator, $useDefault);
            }
         
            /**
             * Add a "where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @param string|null $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereColumn($first, $operator, $second, $boolean);
            }
         
            /**
             * Add an "or where" clause comparing two columns to the query.
             *
             * @param string|array $first
             * @param string|null $operator
             * @param string|null $second
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereColumn($first, $operator = null, $second = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereColumn($first, $operator, $second);
            }
         
            /**
             * Add a raw where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereRaw($sql, $bindings = [], $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereRaw($sql, $bindings, $boolean);
            }
         
            /**
             * Add a raw or where clause to the query.
             *
             * @param string $sql
             * @param mixed $bindings
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereRaw($sql, $bindings = [])
            {    
                return \Illuminate\Database\Query\Builder::orWhereRaw($sql, $bindings);
            }
         
            /**
             * Add a "where in" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param mixed $values
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereIn($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereIn($column, $values, $boolean, $not);
            }
         
            /**
             * Add an "or where in" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereIn($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereIn($column, $values);
            }
         
            /**
             * Add a "where not in" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param mixed $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereNotIn($column, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotIn($column, $values, $boolean);
            }
         
            /**
             * Add an "or where not in" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param mixed $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereNotIn($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotIn($column, $values);
            }
         
            /**
             * Add a "where in raw" clause for integer values to the query.
             *
             * @param string $column
             * @param \Illuminate\Contracts\Support\Arrayable|array $values
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereIntegerInRaw($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereIntegerInRaw($column, $values, $boolean, $not);
            }
         
            /**
             * Add an "or where in raw" clause for integer values to the query.
             *
             * @param string $column
             * @param \Illuminate\Contracts\Support\Arrayable|array $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereIntegerInRaw($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereIntegerInRaw($column, $values);
            }
         
            /**
             * Add a "where not in raw" clause for integer values to the query.
             *
             * @param string $column
             * @param \Illuminate\Contracts\Support\Arrayable|array $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereIntegerNotInRaw($column, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereIntegerNotInRaw($column, $values, $boolean);
            }
         
            /**
             * Add an "or where not in raw" clause for integer values to the query.
             *
             * @param string $column
             * @param \Illuminate\Contracts\Support\Arrayable|array $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereIntegerNotInRaw($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereIntegerNotInRaw($column, $values);
            }
         
            /**
             * Add a "where null" clause to the query.
             *
             * @param string|array|\Illuminate\Contracts\Database\Query\Expression $columns
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereNull($columns, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereNull($columns, $boolean, $not);
            }
         
            /**
             * Add an "or where null" clause to the query.
             *
             * @param string|array|\Illuminate\Contracts\Database\Query\Expression $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereNull($column)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNull($column);
            }
         
            /**
             * Add a "where not null" clause to the query.
             *
             * @param string|array|\Illuminate\Contracts\Database\Query\Expression $columns
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereNotNull($columns, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotNull($columns, $boolean);
            }
         
            /**
             * Add a where between statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param \Illuminate\Database\Query\iterable $values
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereBetween($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereBetween($column, $values, $boolean, $not);
            }
         
            /**
             * Add a where between statement using columns to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param array $values
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereBetweenColumns($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereBetweenColumns($column, $values, $boolean, $not);
            }
         
            /**
             * Add an or where between statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param \Illuminate\Database\Query\iterable $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereBetween($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereBetween($column, $values);
            }
         
            /**
             * Add an or where between statement using columns to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereBetweenColumns($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereBetweenColumns($column, $values);
            }
         
            /**
             * Add a where not between statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param \Illuminate\Database\Query\iterable $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereNotBetween($column, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotBetween($column, $values, $boolean);
            }
         
            /**
             * Add a where not between statement using columns to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param array $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereNotBetweenColumns($column, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotBetweenColumns($column, $values, $boolean);
            }
         
            /**
             * Add an or where not between statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param \Illuminate\Database\Query\iterable $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereNotBetween($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotBetween($column, $values);
            }
         
            /**
             * Add an or where not between statement using columns to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param array $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereNotBetweenColumns($column, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotBetweenColumns($column, $values);
            }
         
            /**
             * Add an "or where not null" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereNotNull($column)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotNull($column);
            }
         
            /**
             * Add a "where date" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|null $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereDate($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereDate($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where date" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|null $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereDate($column, $operator, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereDate($column, $operator, $value);
            }
         
            /**
             * Add a "where time" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|null $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereTime($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereTime($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where time" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|null $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereTime($column, $operator, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereTime($column, $operator, $value);
            }
         
            /**
             * Add a "where day" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|int|null $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereDay($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereDay($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where day" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|int|null $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereDay($column, $operator, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereDay($column, $operator, $value);
            }
         
            /**
             * Add a "where month" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|int|null $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereMonth($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where month" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|int|null $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereMonth($column, $operator, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereMonth($column, $operator, $value);
            }
         
            /**
             * Add a "where year" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|int|null $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereYear($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereYear($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where year" statement to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $operator
             * @param \DateTimeInterface|string|int|null $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereYear($column, $operator, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereYear($column, $operator, $value);
            }
         
            /**
             * Add a nested where statement to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereNested($callback, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNested($callback, $boolean);
            }
         
            /**
             * Create a new query instance for nested where condition.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forNestedWhere()
            {    
                return \Illuminate\Database\Query\Builder::forNestedWhere();
            }
         
            /**
             * Add another query builder as a nested where to the query builder.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function addNestedWhereQuery($query, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::addNestedWhereQuery($query, $boolean);
            }
         
            /**
             * Add an exists clause to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $callback
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereExists($callback, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereExists($callback, $boolean, $not);
            }
         
            /**
             * Add an or exists clause to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $callback
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereExists($callback, $not = false)
            {    
                return \Illuminate\Database\Query\Builder::orWhereExists($callback, $not);
            }
         
            /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereNotExists($callback, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereNotExists($callback, $boolean);
            }
         
            /**
             * Add a where not exists clause to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $callback
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereNotExists($callback)
            {    
                return \Illuminate\Database\Query\Builder::orWhereNotExists($callback);
            }
         
            /**
             * Add an exists clause to the query.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::addWhereExistsQuery($query, $boolean, $not);
            }
         
            /**
             * Adds a where condition using row values.
             *
             * @param array $columns
             * @param string $operator
             * @param array $values
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function whereRowValues($columns, $operator, $values, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereRowValues($columns, $operator, $values, $boolean);
            }
         
            /**
             * Adds an or where condition using row values.
             *
             * @param array $columns
             * @param string $operator
             * @param array $values
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereRowValues($columns, $operator, $values)
            {    
                return \Illuminate\Database\Query\Builder::orWhereRowValues($columns, $operator, $values);
            }
         
            /**
             * Add a "where JSON contains" clause to the query.
             *
             * @param string $column
             * @param mixed $value
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereJsonContains($column, $value, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereJsonContains($column, $value, $boolean, $not);
            }
         
            /**
             * Add an "or where JSON contains" clause to the query.
             *
             * @param string $column
             * @param mixed $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereJsonContains($column, $value)
            {    
                return \Illuminate\Database\Query\Builder::orWhereJsonContains($column, $value);
            }
         
            /**
             * Add a "where JSON not contains" clause to the query.
             *
             * @param string $column
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereJsonDoesntContain($column, $value, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereJsonDoesntContain($column, $value, $boolean);
            }
         
            /**
             * Add an "or where JSON not contains" clause to the query.
             *
             * @param string $column
             * @param mixed $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereJsonDoesntContain($column, $value)
            {    
                return \Illuminate\Database\Query\Builder::orWhereJsonDoesntContain($column, $value);
            }
         
            /**
             * Add a clause that determines if a JSON path exists to the query.
             *
             * @param string $column
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereJsonContainsKey($column, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::whereJsonContainsKey($column, $boolean, $not);
            }
         
            /**
             * Add an "or" clause that determines if a JSON path exists to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereJsonContainsKey($column)
            {    
                return \Illuminate\Database\Query\Builder::orWhereJsonContainsKey($column);
            }
         
            /**
             * Add a clause that determines if a JSON path does not exist to the query.
             *
             * @param string $column
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereJsonDoesntContainKey($column, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereJsonDoesntContainKey($column, $boolean);
            }
         
            /**
             * Add an "or" clause that determines if a JSON path does not exist to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereJsonDoesntContainKey($column)
            {    
                return \Illuminate\Database\Query\Builder::orWhereJsonDoesntContainKey($column);
            }
         
            /**
             * Add a "where JSON length" clause to the query.
             *
             * @param string $column
             * @param mixed $operator
             * @param mixed $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereJsonLength($column, $operator, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereJsonLength($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or where JSON length" clause to the query.
             *
             * @param string $column
             * @param mixed $operator
             * @param mixed $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereJsonLength($column, $operator, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orWhereJsonLength($column, $operator, $value);
            }
         
            /**
             * Handles dynamic "where" clauses to the query.
             *
             * @param string $method
             * @param array $parameters
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function dynamicWhere($method, $parameters)
            {    
                return \Illuminate\Database\Query\Builder::dynamicWhere($method, $parameters);
            }
         
            /**
             * Add a "where fulltext" clause to the query.
             *
             * @param string|string[] $columns
             * @param string $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function whereFullText($columns, $value, $options = [], $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::whereFullText($columns, $value, $options, $boolean);
            }
         
            /**
             * Add a "or where fulltext" clause to the query.
             *
             * @param string|string[] $columns
             * @param string $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orWhereFullText($columns, $value, $options = [])
            {    
                return \Illuminate\Database\Query\Builder::orWhereFullText($columns, $value, $options);
            }
         
            /**
             * Add a "group by" clause to the query.
             *
             * @param array|\Illuminate\Contracts\Database\Query\Expression|string $groups
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function groupBy(...$groups)
            {    
                return \Illuminate\Database\Query\Builder::groupBy(...$groups);
            }
         
            /**
             * Add a raw groupBy clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function groupByRaw($sql, $bindings = [])
            {    
                return \Illuminate\Database\Query\Builder::groupByRaw($sql, $bindings);
            }
         
            /**
             * Add a "having" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|\Closure|string $column
             * @param string|int|float|null $operator
             * @param string|int|float|null $value
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function having($column, $operator = null, $value = null, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::having($column, $operator, $value, $boolean);
            }
         
            /**
             * Add an "or having" clause to the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|\Closure|string $column
             * @param string|int|float|null $operator
             * @param string|int|float|null $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orHaving($column, $operator = null, $value = null)
            {    
                return \Illuminate\Database\Query\Builder::orHaving($column, $operator, $value);
            }
         
            /**
             * Add a nested having statement to the query.
             *
             * @param \Closure $callback
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function havingNested($callback, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::havingNested($callback, $boolean);
            }
         
            /**
             * Add another query builder as a nested having to the query builder.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function addNestedHavingQuery($query, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::addNestedHavingQuery($query, $boolean);
            }
         
            /**
             * Add a "having null" clause to the query.
             *
             * @param string|array $columns
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function havingNull($columns, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::havingNull($columns, $boolean, $not);
            }
         
            /**
             * Add an "or having null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orHavingNull($column)
            {    
                return \Illuminate\Database\Query\Builder::orHavingNull($column);
            }
         
            /**
             * Add a "having not null" clause to the query.
             *
             * @param string|array $columns
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function havingNotNull($columns, $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::havingNotNull($columns, $boolean);
            }
         
            /**
             * Add an "or having not null" clause to the query.
             *
             * @param string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orHavingNotNull($column)
            {    
                return \Illuminate\Database\Query\Builder::orHavingNotNull($column);
            }
         
            /**
             * Add a "having between " clause to the query.
             *
             * @param string $column
             * @param \Illuminate\Database\Query\iterable $values
             * @param string $boolean
             * @param bool $not
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function havingBetween($column, $values, $boolean = 'and', $not = false)
            {    
                return \Illuminate\Database\Query\Builder::havingBetween($column, $values, $boolean, $not);
            }
         
            /**
             * Add a raw having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @param string $boolean
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function havingRaw($sql, $bindings = [], $boolean = 'and')
            {    
                return \Illuminate\Database\Query\Builder::havingRaw($sql, $bindings, $boolean);
            }
         
            /**
             * Add a raw or having clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orHavingRaw($sql, $bindings = [])
            {    
                return \Illuminate\Database\Query\Builder::orHavingRaw($sql, $bindings);
            }
         
            /**
             * Add an "order by" clause to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|\Illuminate\Contracts\Database\Query\Expression|string $column
             * @param string $direction
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function orderBy($column, $direction = 'asc')
            {    
                return \Illuminate\Database\Query\Builder::orderBy($column, $direction);
            }
         
            /**
             * Add a descending "order by" clause to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|\Illuminate\Contracts\Database\Query\Expression|string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orderByDesc($column)
            {    
                return \Illuminate\Database\Query\Builder::orderByDesc($column);
            }
         
            /**
             * Put the query's results in random order.
             *
             * @param string|int $seed
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function inRandomOrder($seed = '')
            {    
                return \Illuminate\Database\Query\Builder::inRandomOrder($seed);
            }
         
            /**
             * Add a raw "order by" clause to the query.
             *
             * @param string $sql
             * @param array $bindings
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function orderByRaw($sql, $bindings = [])
            {    
                return \Illuminate\Database\Query\Builder::orderByRaw($sql, $bindings);
            }
         
            /**
             * Alias to set the "offset" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function skip($value)
            {    
                return \Illuminate\Database\Query\Builder::skip($value);
            }
         
            /**
             * Set the "offset" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function offset($value)
            {    
                return \Illuminate\Database\Query\Builder::offset($value);
            }
         
            /**
             * Alias to set the "limit" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function take($value)
            {    
                return \Illuminate\Database\Query\Builder::take($value);
            }
         
            /**
             * Set the "limit" value of the query.
             *
             * @param int $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function limit($value)
            {    
                return \Illuminate\Database\Query\Builder::limit($value);
            }
         
            /**
             * Set the limit and offset for a given page.
             *
             * @param int $page
             * @param int $perPage
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forPage($page, $perPage = 15)
            {    
                return \Illuminate\Database\Query\Builder::forPage($page, $perPage);
            }
         
            /**
             * Constrain the query to the previous "page" of results before a given ID.
             *
             * @param int $perPage
             * @param int|null $lastId
             * @param string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forPageBeforeId($perPage = 15, $lastId = 0, $column = 'id')
            {    
                return \Illuminate\Database\Query\Builder::forPageBeforeId($perPage, $lastId, $column);
            }
         
            /**
             * Constrain the query to the next "page" of results after a given ID.
             *
             * @param int $perPage
             * @param int|null $lastId
             * @param string $column
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
            {    
                return \Illuminate\Database\Query\Builder::forPageAfterId($perPage, $lastId, $column);
            }
         
            /**
             * Remove all existing orders and optionally add a new order.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Contracts\Database\Query\Expression|string|null $column
             * @param string $direction
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function reorder($column = null, $direction = 'asc')
            {    
                return \Illuminate\Database\Query\Builder::reorder($column, $direction);
            }
         
            /**
             * Add a union statement to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
             * @param bool $all
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function union($query, $all = false)
            {    
                return \Illuminate\Database\Query\Builder::union($query, $all);
            }
         
            /**
             * Add a union all statement to the query.
             *
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function unionAll($query)
            {    
                return \Illuminate\Database\Query\Builder::unionAll($query);
            }
         
            /**
             * Lock the selected rows in the table.
             *
             * @param string|bool $value
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function lock($value = true)
            {    
                return \Illuminate\Database\Query\Builder::lock($value);
            }
         
            /**
             * Lock the selected rows in the table for updating.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function lockForUpdate()
            {    
                return \Illuminate\Database\Query\Builder::lockForUpdate();
            }
         
            /**
             * Share lock the selected rows in the table.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function sharedLock()
            {    
                return \Illuminate\Database\Query\Builder::sharedLock();
            }
         
            /**
             * Register a closure to be invoked before the query is executed.
             *
             * @param callable $callback
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function beforeQuery($callback)
            {    
                return \Illuminate\Database\Query\Builder::beforeQuery($callback);
            }
         
            /**
             * Invoke the "before query" modification callbacks.
             *
             * @return void 
             * @static 
             */ 
            public static function applyBeforeQueryCallbacks()
            {    
                \Illuminate\Database\Query\Builder::applyBeforeQueryCallbacks();
            }
         
            /**
             * Get the SQL representation of the query.
             *
             * @return string 
             * @static 
             */ 
            public static function toSql()
            {    
                return \Illuminate\Database\Query\Builder::toSql();
            }
         
            /**
             * Get the raw SQL representation of the query with embedded bindings.
             *
             * @return string 
             * @static 
             */ 
            public static function toRawSql()
            {    
                return \Illuminate\Database\Query\Builder::toRawSql();
            }
         
            /**
             * Get a single expression value from the first result of a query.
             *
             * @param string $expression
             * @param array $bindings
             * @return mixed 
             * @static 
             */ 
            public static function rawValue($expression, $bindings = [])
            {    
                return \Illuminate\Database\Query\Builder::rawValue($expression, $bindings);
            }
         
            /**
             * Get the count of the total records for the paginator.
             *
             * @param array $columns
             * @return int 
             * @static 
             */ 
            public static function getCountForPagination($columns = [])
            {    
                return \Illuminate\Database\Query\Builder::getCountForPagination($columns);
            }
         
            /**
             * Concatenate values of a given column as a string.
             *
             * @param string $column
             * @param string $glue
             * @return string 
             * @static 
             */ 
            public static function implode($column, $glue = '')
            {    
                return \Illuminate\Database\Query\Builder::implode($column, $glue);
            }
         
            /**
             * Determine if any rows exist for the current query.
             *
             * @return bool 
             * @static 
             */ 
            public static function exists()
            {    
                return \Illuminate\Database\Query\Builder::exists();
            }
         
            /**
             * Determine if no rows exist for the current query.
             *
             * @return bool 
             * @static 
             */ 
            public static function doesntExist()
            {    
                return \Illuminate\Database\Query\Builder::doesntExist();
            }
         
            /**
             * Execute the given callback if no rows exist for the current query.
             *
             * @param \Closure $callback
             * @return mixed 
             * @static 
             */ 
            public static function existsOr($callback)
            {    
                return \Illuminate\Database\Query\Builder::existsOr($callback);
            }
         
            /**
             * Execute the given callback if rows exist for the current query.
             *
             * @param \Closure $callback
             * @return mixed 
             * @static 
             */ 
            public static function doesntExistOr($callback)
            {    
                return \Illuminate\Database\Query\Builder::doesntExistOr($callback);
            }
         
            /**
             * Retrieve the "count" result of the query.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $columns
             * @return int 
             * @static 
             */ 
            public static function count($columns = '*')
            {    
                return \Illuminate\Database\Query\Builder::count($columns);
            }
         
            /**
             * Retrieve the minimum value of a given column.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @return mixed 
             * @static 
             */ 
            public static function min($column)
            {    
                return \Illuminate\Database\Query\Builder::min($column);
            }
         
            /**
             * Retrieve the maximum value of a given column.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @return mixed 
             * @static 
             */ 
            public static function max($column)
            {    
                return \Illuminate\Database\Query\Builder::max($column);
            }
         
            /**
             * Retrieve the sum of the values of a given column.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @return mixed 
             * @static 
             */ 
            public static function sum($column)
            {    
                return \Illuminate\Database\Query\Builder::sum($column);
            }
         
            /**
             * Retrieve the average of the values of a given column.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @return mixed 
             * @static 
             */ 
            public static function avg($column)
            {    
                return \Illuminate\Database\Query\Builder::avg($column);
            }
         
            /**
             * Alias for the "avg" method.
             *
             * @param \Illuminate\Contracts\Database\Query\Expression|string $column
             * @return mixed 
             * @static 
             */ 
            public static function average($column)
            {    
                return \Illuminate\Database\Query\Builder::average($column);
            }
         
            /**
             * Execute an aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return mixed 
             * @static 
             */ 
            public static function aggregate($function, $columns = [])
            {    
                return \Illuminate\Database\Query\Builder::aggregate($function, $columns);
            }
         
            /**
             * Execute a numeric aggregate function on the database.
             *
             * @param string $function
             * @param array $columns
             * @return float|int 
             * @static 
             */ 
            public static function numericAggregate($function, $columns = [])
            {    
                return \Illuminate\Database\Query\Builder::numericAggregate($function, $columns);
            }
         
            /**
             * Insert new records into the database.
             *
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function insert($values)
            {    
                return \Illuminate\Database\Query\Builder::insert($values);
            }
         
            /**
             * Insert new records into the database while ignoring errors.
             *
             * @param array $values
             * @return int 
             * @static 
             */ 
            public static function insertOrIgnore($values)
            {    
                return \Illuminate\Database\Query\Builder::insertOrIgnore($values);
            }
         
            /**
             * Insert a new record and get the value of the primary key.
             *
             * @param array $values
             * @param string|null $sequence
             * @return int 
             * @static 
             */ 
            public static function insertGetId($values, $sequence = null)
            {    
                return \Illuminate\Database\Query\Builder::insertGetId($values, $sequence);
            }
         
            /**
             * Insert new records into the table using a subquery.
             *
             * @param array $columns
             * @param \Closure|\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder|string $query
             * @return int 
             * @static 
             */ 
            public static function insertUsing($columns, $query)
            {    
                return \Illuminate\Database\Query\Builder::insertUsing($columns, $query);
            }
         
            /**
             * Update records in a PostgreSQL database using the update from syntax.
             *
             * @param array $values
             * @return int 
             * @static 
             */ 
            public static function updateFrom($values)
            {    
                return \Illuminate\Database\Query\Builder::updateFrom($values);
            }
         
            /**
             * Insert or update a record matching the attributes, and fill it with values.
             *
             * @param array $attributes
             * @param array $values
             * @return bool 
             * @static 
             */ 
            public static function updateOrInsert($attributes, $values = [])
            {    
                return \Illuminate\Database\Query\Builder::updateOrInsert($attributes, $values);
            }
         
            /**
             * Increment the given column's values by the given amounts.
             *
             * @param array<string, float|int|numeric-string> $columns
             * @param array<string, mixed> $extra
             * @return int 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function incrementEach($columns, $extra = [])
            {    
                return \Illuminate\Database\Query\Builder::incrementEach($columns, $extra);
            }
         
            /**
             * Decrement the given column's values by the given amounts.
             *
             * @param array<string, float|int|numeric-string> $columns
             * @param array<string, mixed> $extra
             * @return int 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function decrementEach($columns, $extra = [])
            {    
                return \Illuminate\Database\Query\Builder::decrementEach($columns, $extra);
            }
         
            /**
             * Run a truncate statement on the table.
             *
             * @return void 
             * @static 
             */ 
            public static function truncate()
            {    
                \Illuminate\Database\Query\Builder::truncate();
            }
         
            /**
             * Get all of the query builder's columns in a text-only array with all expressions evaluated.
             *
             * @return array 
             * @static 
             */ 
            public static function getColumns()
            {    
                return \Illuminate\Database\Query\Builder::getColumns();
            }
         
            /**
             * Create a raw database expression.
             *
             * @param mixed $value
             * @return \Illuminate\Contracts\Database\Query\Expression 
             * @static 
             */ 
            public static function raw($value)
            {    
                return \Illuminate\Database\Query\Builder::raw($value);
            }
         
            /**
             * Get the current query value bindings in a flattened array.
             *
             * @return array 
             * @static 
             */ 
            public static function getBindings()
            {    
                return \Illuminate\Database\Query\Builder::getBindings();
            }
         
            /**
             * Get the raw array of bindings.
             *
             * @return array 
             * @static 
             */ 
            public static function getRawBindings()
            {    
                return \Illuminate\Database\Query\Builder::getRawBindings();
            }
         
            /**
             * Set the bindings on the query builder.
             *
             * @param array $bindings
             * @param string $type
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function setBindings($bindings, $type = 'where')
            {    
                return \Illuminate\Database\Query\Builder::setBindings($bindings, $type);
            }
         
            /**
             * Add a binding to the query.
             *
             * @param mixed $value
             * @param string $type
             * @return \Illuminate\Database\Query\Builder 
             * @throws \InvalidArgumentException
             * @static 
             */ 
            public static function addBinding($value, $type = 'where')
            {    
                return \Illuminate\Database\Query\Builder::addBinding($value, $type);
            }
         
            /**
             * Cast the given binding value.
             *
             * @param mixed $value
             * @return mixed 
             * @static 
             */ 
            public static function castBinding($value)
            {    
                return \Illuminate\Database\Query\Builder::castBinding($value);
            }
         
            /**
             * Merge an array of bindings into our bindings.
             *
             * @param \Illuminate\Database\Query\Builder $query
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function mergeBindings($query)
            {    
                return \Illuminate\Database\Query\Builder::mergeBindings($query);
            }
         
            /**
             * Remove all of the expressions from a list of bindings.
             *
             * @param array $bindings
             * @return array 
             * @static 
             */ 
            public static function cleanBindings($bindings)
            {    
                return \Illuminate\Database\Query\Builder::cleanBindings($bindings);
            }
         
            /**
             * Get the database query processor instance.
             *
             * @return \Illuminate\Database\Query\Processors\Processor 
             * @static 
             */ 
            public static function getProcessor()
            {    
                return \Illuminate\Database\Query\Builder::getProcessor();
            }
         
            /**
             * Get the query grammar instance.
             *
             * @return \Illuminate\Database\Query\Grammars\Grammar 
             * @static 
             */ 
            public static function getGrammar()
            {    
                return \Illuminate\Database\Query\Builder::getGrammar();
            }
         
            /**
             * Use the "write" PDO connection when executing the query.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function useWritePdo()
            {    
                return \Illuminate\Database\Query\Builder::useWritePdo();
            }
         
            /**
             * Clone the query without the given properties.
             *
             * @param array $properties
             * @return static 
             * @static 
             */ 
            public static function cloneWithout($properties)
            {    
                return \Illuminate\Database\Query\Builder::cloneWithout($properties);
            }
         
            /**
             * Clone the query without the given bindings.
             *
             * @param array $except
             * @return static 
             * @static 
             */ 
            public static function cloneWithoutBindings($except)
            {    
                return \Illuminate\Database\Query\Builder::cloneWithoutBindings($except);
            }
         
            /**
             * Dump the current SQL and bindings.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function dump()
            {    
                return \Illuminate\Database\Query\Builder::dump();
            }
         
            /**
             * Dump the raw current SQL with embedded bindings.
             *
             * @return \Illuminate\Database\Query\Builder 
             * @static 
             */ 
            public static function dumpRawSql()
            {    
                return \Illuminate\Database\Query\Builder::dumpRawSql();
            }
         
            /**
             * Die and dump the current SQL and bindings.
             *
             * @return \Illuminate\Database\Query\never 
             * @static 
             */ 
            public static function dd()
            {    
                return \Illuminate\Database\Query\Builder::dd();
            }
         
            /**
             * Die and dump the current SQL with embedded bindings.
             *
             * @return \Illuminate\Database\Query\never 
             * @static 
             */ 
            public static function ddRawSql()
            {    
                return \Illuminate\Database\Query\Builder::ddRawSql();
            }
         
            /**
             * Explains the query.
             *
             * @return \Illuminate\Support\Collection 
             * @static 
             */ 
            public static function explain()
            {    
                return \Illuminate\Database\Query\Builder::explain();
            }
         
            /**
             * Register a custom macro.
             *
             * @param string $name
             * @param object|callable $macro
             * @return void 
             * @static 
             */ 
            public static function macro($name, $macro)
            {    
                \Illuminate\Database\Query\Builder::macro($name, $macro);
            }
         
            /**
             * Mix another object into the class.
             *
             * @param object $mixin
             * @param bool $replace
             * @return void 
             * @throws \ReflectionException
             * @static 
             */ 
            public static function mixin($mixin, $replace = true)
            {    
                \Illuminate\Database\Query\Builder::mixin($mixin, $replace);
            }
         
            /**
             * Flush the existing macros.
             *
             * @return void 
             * @static 
             */ 
            public static function flushMacros()
            {    
                \Illuminate\Database\Query\Builder::flushMacros();
            }
         
            /**
             * Dynamically handle calls to the class.
             *
             * @param string $method
             * @param array $parameters
             * @return mixed 
             * @throws \BadMethodCallException
             * @static 
             */ 
            public static function macroCall($method, $parameters)
            {    
                return \Illuminate\Database\Query\Builder::macroCall($method, $parameters);
            }
        }

    class Event extends \Illuminate\Support\Facades\Event {}

    class File extends \Illuminate\Support\Facades\File {}

    class Gate extends \Illuminate\Support\Facades\Gate {}

    class Hash extends \Illuminate\Support\Facades\Hash {}

    class Http extends \Illuminate\Support\Facades\Http {}

    class Js extends \Illuminate\Support\Js {}

    class Lang extends \Illuminate\Support\Facades\Lang {}

    class Log extends \Illuminate\Support\Facades\Log {}

    class Mail extends \Illuminate\Support\Facades\Mail {}

    class Notification extends \Illuminate\Support\Facades\Notification {}

    class Password extends \Illuminate\Support\Facades\Password {}

    class Process extends \Illuminate\Support\Facades\Process {}

    class Queue extends \Illuminate\Support\Facades\Queue {}

    class RateLimiter extends \Illuminate\Support\Facades\RateLimiter {}

    class Redirect extends \Illuminate\Support\Facades\Redirect {}

    class Request extends \Illuminate\Support\Facades\Request {}

    class Response extends \Illuminate\Support\Facades\Response {}

    class Route extends \Illuminate\Support\Facades\Route {}

    class Schema extends \Illuminate\Support\Facades\Schema {}

    class Session extends \Illuminate\Support\Facades\Session {}

    class Storage extends \Illuminate\Support\Facades\Storage {}

    class Str extends \Illuminate\Support\Str {}

    class URL extends \Illuminate\Support\Facades\URL {}

    class Validator extends \Illuminate\Support\Facades\Validator {}

    class View extends \Illuminate\Support\Facades\View {}

    class Vite extends \Illuminate\Support\Facades\Vite {}

    class Breadcrumbs extends \DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs {}

    class Form extends \Collective\Html\FormFacade {}

    class Html extends \Collective\Html\HtmlFacade {}

    class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}

    class Assets extends \KodiCMS\Assets\Facades\Assets {}

    class PackageManager extends \KodiCMS\Assets\Facades\PackageManager {}

    class Meta extends \KodiCMS\Assets\Facades\Meta {}

    class HTML extends \Collective\Html\HtmlFacade {}

    class WysiwygManager extends \SleepingOwl\Admin\Facades\WysiwygManager {}

    class MessagesStack extends \SleepingOwl\Admin\Facades\MessageStack {}

    class AdminSection extends \SleepingOwl\Admin\Facades\Admin {}

    class AdminTemplate extends \SleepingOwl\Admin\Facades\Template {}

    class AdminNavigation extends \SleepingOwl\Admin\Facades\Navigation {}

    class AdminColumn extends \SleepingOwl\Admin\Facades\TableColumn {}

    class AdminColumnEditable extends \SleepingOwl\Admin\Facades\TableColumnEditable {}

    class AdminColumnFilter extends \SleepingOwl\Admin\Facades\TableColumnFilter {}

    class AdminDisplayFilter extends \SleepingOwl\Admin\Facades\DisplayFilter {}

    class AdminForm extends \SleepingOwl\Admin\Facades\Form {}

    class AdminFormElement extends \SleepingOwl\Admin\Facades\FormElement {}

    class AdminDisplay extends \SleepingOwl\Admin\Facades\Display {}

    class AdminWidgets extends \SleepingOwl\Admin\Facades\Widgets {}
 
}



