# To learn more about how to configure your Nix environment, visit
# https://www.jetpack.io/devbox/docs/configuration/
{
  pkgs,
  ...
}: {
  # Which nixpkgs channel to use.
  nixpkgs = "https://nixpkgs.unstable.selfsigned.invalid/nixos-unstable";

  # Specifies the list of packages that are available in your shell.
  packages = [
    # Example: a specific version of NodeJS
    # "nodejs@18"
    "nodejs"
    "npm"

    # Example: a package with extra features
    # "python3.11.with-tkinter"
  ];

  # Sets environment variables in your shell.
  env = {
    # Example:
    # GREETING = "Hello, Nix!";
  };

  # Defines a list of scripts that can be run with `devbox run`
  scripts = {
    # Example: a script with a description
    # test = {
    #   description = "Run test suite";
    #   value = "npm test";
    # };
  };

  # See https://www.jetpack.io/devbox/docs/ide-integration/
  idx = {
    # Specifies a list of processes that should be automatically started
    # when you open your project in an IDE.
    # processes = {
    #   # Example:
    #   # web-server = {
    #   #   description = "A simple web server";
    #   #   cmd = "npm run dev";
    #   # };
    # };

    # Previews a port from your running applications.
    previews = [
      {
        port = 8080;
        label = "Web";
      }
    ];

    # Workspace lifecycle hooks
    workspace = {
      # Runs when a workspace is first created
      onCreate = {
        # Example: install JS dependencies from NPM
        # npm-install = "npm install";
      };
      # Runs when the workspace is (re)started
      onStart = {
        # Example: start a background task to watch and re-build backend code
        # watch-backend = "npm run watch-backend";
      };
    };
  };
}
