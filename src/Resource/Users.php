<?php

namespace DanielHe4rt\PostHog\Resource;

use DanielHe4rt\PostHog\Requests\Users\UsersHedgehogConfigPartialUpdate;
use DanielHe4rt\PostHog\Requests\Users\UsersHedgehogConfigRetrieve;
use DanielHe4rt\PostHog\Requests\Users\UsersList;
use DanielHe4rt\PostHog\Requests\Users\UsersPartialUpdate;
use DanielHe4rt\PostHog\Requests\Users\UsersRequestEmailVerificationCreate;
use DanielHe4rt\PostHog\Requests\Users\UsersRetrieve;
use DanielHe4rt\PostHog\Requests\Users\UsersScenePersonalisationCreate;
use DanielHe4rt\PostHog\Requests\Users\UsersStart2faSetupRetrieve;
use DanielHe4rt\PostHog\Requests\Users\UsersTwoFactorBackupCodesCreate;
use DanielHe4rt\PostHog\Requests\Users\UsersTwoFactorDisableCreate;
use DanielHe4rt\PostHog\Requests\Users\UsersTwoFactorStartSetupRetrieve;
use DanielHe4rt\PostHog\Requests\Users\UsersTwoFactorStatusRetrieve;
use DanielHe4rt\PostHog\Requests\Users\UsersTwoFactorValidateCreate;
use DanielHe4rt\PostHog\Requests\Users\UsersUpdate;
use DanielHe4rt\PostHog\Requests\Users\UsersValidate2faCreate;
use DanielHe4rt\PostHog\Requests\Users\UsersVerifyEmailCreate;
use DanielHe4rt\PostHog\Resource;
use Saloon\Http\Response;

class Users extends Resource
{
	/**
	 * @param bool $isStaff
	 * @param int $limit Number of results to return per page.
	 * @param int $offset The initial index from which to return the results.
	 */
	public function usersList(?bool $isStaff, ?int $limit, ?int $offset): Response
	{
		return $this->connector->send(new UsersList($isStaff, $limit, $offset));
	}


	/**
	 * @param string $uuid
	 */
	public function usersRetrieve(string $uuid): Response
	{
		return $this->connector->send(new UsersRetrieve($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersUpdate(string $uuid): Response
	{
		return $this->connector->send(new UsersUpdate($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersPartialUpdate(string $uuid): Response
	{
		return $this->connector->send(new UsersPartialUpdate($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersHedgehogConfigRetrieve(string $uuid): Response
	{
		return $this->connector->send(new UsersHedgehogConfigRetrieve($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersHedgehogConfigPartialUpdate(string $uuid): Response
	{
		return $this->connector->send(new UsersHedgehogConfigPartialUpdate($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersScenePersonalisationCreate(string $uuid): Response
	{
		return $this->connector->send(new UsersScenePersonalisationCreate($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersStart2faSetupRetrieve(string $uuid): Response
	{
		return $this->connector->send(new UsersStart2faSetupRetrieve($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersTwoFactorBackupCodesCreate(string $uuid): Response
	{
		return $this->connector->send(new UsersTwoFactorBackupCodesCreate($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersTwoFactorDisableCreate(string $uuid): Response
	{
		return $this->connector->send(new UsersTwoFactorDisableCreate($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersTwoFactorStartSetupRetrieve(string $uuid): Response
	{
		return $this->connector->send(new UsersTwoFactorStartSetupRetrieve($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersTwoFactorStatusRetrieve(string $uuid): Response
	{
		return $this->connector->send(new UsersTwoFactorStatusRetrieve($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersTwoFactorValidateCreate(string $uuid): Response
	{
		return $this->connector->send(new UsersTwoFactorValidateCreate($uuid));
	}


	/**
	 * @param string $uuid
	 */
	public function usersValidate2faCreate(string $uuid): Response
	{
		return $this->connector->send(new UsersValidate2faCreate($uuid));
	}


	public function usersRequestEmailVerificationCreate(): Response
	{
		return $this->connector->send(new UsersRequestEmailVerificationCreate());
	}


	public function usersVerifyEmailCreate(): Response
	{
		return $this->connector->send(new UsersVerifyEmailCreate());
	}
}
